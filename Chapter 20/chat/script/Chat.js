/*
 * @description: Chat模块
 */
/*
 * @description: Chat对象，主控制器
 */
var Chat = {
	/*
	 * @property:webservice
	 * @type:string
	 * @description:webservice地址
	 */
	webservice:'service/',
	/*
	 * @property:messageBox,
	 * @type:HTMLElement
	 * @description:用于显示消息的页面容器
	 */
	messageBox:null,
	/*
	 * @property:colorPicker
	 * @type:ColorPicker
	 * @description:拾色器对象
	 */
	colorPicker:null,
	/*
	 * @property:messageInput
	 * @type:HTMLElement
	 * @description:用于用户输入消息的表单控件
	 */
	messageInput:null,
	/*
	 * @property:messageButton
	 * @type:HTMLElement
	 * @description:用户用户发送消息的按钮对象
	 */
	messageButton:null,
	/*
	 * @property:style
	 * @type:object
	 * @description:消息的样式，对应css类名
	 */
	style:{
		nameStyle:'name',								//昵称样式
		timeStyle:'time',								//时间样式
		messageStyle:'message'							//消息内容样式
	},
	/*
	 * @description:在程序发生错误时，用于输出错误信息的方法
	 * @param:msg,string,错误信息
	 */
	onError:function(msg)
	{
		alert(msg);	
	},
	/*
	 * @description:初始化
	 */
	init:function()
	{
		Chat.messageInput.disabled = false;
		Chat.messageButton.disabled = false;
		Chat.user.getMessages();
	},
	/*
	 * @description:设置当前用户
	 * @param:name,string,昵称
	 */
	setUser:function(name)
	{
		if(!Chat.user)
		{
			/*
			 * 如果用户不存在，则创建新用户并初始化Chat
			 */
			Chat.user = new User();
			Chat.user.name = name;
			Chat.user.save(Chat.init.bind(Chat));
		}
		else
		{
			/*
			 * 如果用户已经存在，则修改用户的昵称
			 */
			if(name != Chat.user.name)
			{
				Chat.user.changeName(name);
			}
		}
	},
	/*
	 * @description:发送消息
	 * @param:messageText,string,消息内容
	 */
	sendMessage:function(messageText)
	{
		/*
		 * 过滤HTML标签并替换表情标签为对应的HTML字符串
		 */
		var messageText = messageText.escapeHTML(),faceName,face;
		while(faceName = messageText.replace(/^(\n|\r|.)*\[(e\d+)\](\n|\r|.)*$/im,'$2'))
		{
			if(/^e\d+$/i.test(faceName))
			{
				face = Face.instances[faceName];
				messageText = messageText.replace('['+faceName+']',face.getHTML());
			}
			else
			{
				break;
			}
		}
		/*
		 * 创建Message对象实例并保存消息
		 */
		var message = new Message();
		message.user = Chat.user;
		message.message = messageText;
		message.textColor = Chat.colorPicker.getColor();
		message.save(function()
		{
			Chat.messageInput.value = '';
		});	
	}
}
/*
 * @class:User
 * @description:用户类
 */
var User = Class.create();
User.prototype = {
	/*
	 * @description:构造函数
	 * @param:id,int,用户id
	 * @param:name,string,用户昵称
	 */
	initialize:function(id,name)
	{
		this.id = id;
		this.name = name;
	},
	/*
	 * @description:保存用户数据
	 * @param:callback,Function,在保存成功后调用的回调函数
	 */
	save:function(callback)
	{
		var __this = this;
		/*
		 * 制造Ajax请求与后台请求控制器交互
		 */
		new Ajax.Request(Chat.webservice,{
			method:'post',
			parameters:{
				'action':'saveuser',
				'name':__this.name
			},
			onSuccess:function(xmlhttprequest)
			{
				/*
				 * 成功返回时填充id属性
				 */
				var data = eval('(' + xmlhttprequest.responseText + ')');
				__this.id = data.id;
				if(callback)
				{
					callback(xmlhttprequest);	
				}
			},
			onFailure:function()
			{
				/*
				 * 输出错误信息
				 */
				Chat.onError('用户保存失败');
			}
		});
	},
	changeName:function(name,callback)
	{
		var __this = this;
		new Ajax.Request(Chat.webservice,{
			method:'post',
			parameters:{
				'action':'changename',
				'id':__this.id,
				'name':name
			},
			onSuccess:function(xmlhttprequest)
			{
				__this.name = name;
				if(callback)
				{
					callback(xmlhttprequest);
				}
			}
		});
	},
	/*
	 * @description:获取消息
	 * @param:callback,Function,在每次成功获取消息后被调用的回调函数
	 */
	getMessages:function(callback)
	{
		var __this = this;
		/*
		 * 制造Ajax请求与后台请求控制器交互以获取数据
		 */
		new Ajax.Request(Chat.webservice,{
			method:'post',
			parameters:{
				'action':'getmessages',
				'id':__this.id
			},
			onSuccess:function(xmlhttprequest)
			{
				/*
				 * 成功返回时利用返回的数据创建Message对象，并显示到页面中
				 */
				var datas = eval('(' +　xmlhttprequest.responseText + ')'),message,user;
				datas.each(function(data){
					user = new User(data.user.id,data.user.name);
					message = new Message(data.id,user,data.message,data.text_color,data.post_time);
					message.show();
				});
				setTimeout(function(){__this.getMessages(callback);},800);
			},
			onFailure:function()
			{
				/*
				 * 输出错误信息
				 */
				Chat.onError('信息读取失败');	
			}
		});
	}
}
/*
 * @class:Message
 * @description:消息类
 */
var Message = Class.create();
Message.prototype = {
	/*
	 * @description:构造函数
	 * @param:id,int,消息id
	 * @param:user,User,消息所属的用户对象
	 * @param:message,string,消息内容
	 * @param:textColor,string,文字颜色代码
	 * @param:postTime,string,消息发布时间的字符串表示
	 */
	initialize:function(id,user,message,textColor,postTime)
	{
		this.id = id;
		this.user = user;
		this.message = message;
		this.textColor = textColor;
		this.postTime = postTime;
	},
	/*
	 * @description:保存消息
	 * @param:callback,Function,在消息保存成功时调用的回调函数
	 */
	save:function(callback)
	{
		var __this = this;
		/*
		 * 制造Ajax请求与后台请求控制器交互以保存消息数据
		 */
		new Ajax.Request(Chat.webservice,{
			method:'post',
			parameters:{
				'action':'savemessage',
				'user_id':__this.user.id,
				'message':__this.message,
				'text_color':__this.textColor
			},
			onSuccess:function(xmlhttprequest)
			{
				/*
				 * 成功返回时填充id和postTime属性
				 */
				var data = eval('(' + xmlhttprequest.responseText + ')');
				__this.id = data.id;
				__this.postTime = data.post_time;
				if(callback)
				{
					callback(xmlhttprequest);	
				}
			},
			onFailure:function()
			{
				/*
				 * 输出错误信息
				 */
				Chat.onError('信息保存失败');
			}
		});
	},
	/*
	 * @description:将消息显示到页面中
	 */
	show:function()
	{
		/*
		 * 创建用于显示消息的HTML对象并添加到页面消息容器中
		 */
		var messageBox = $(Chat.messageBox);
		var divMessage = document.createElement('div');
		var nameSpan = document.createElement('span');
		nameSpan.innerHTML = this.user.name;
		nameSpan.className = Chat.style.nameStyle;
		var timeSpan = document.createElement('span');
		timeSpan.innerHTML = this.postTime;
		timeSpan.className = Chat.style.timeStyle;
		var messageSpan = document.createElement('span');
		messageSpan.innerHTML = this.message;
		messageSpan.className = Chat.style.messageStyle;
		messageSpan.style.color = this.textColor;
		divMessage.appendChild(nameSpan);
		divMessage.appendChild(timeSpan);
		divMessage.appendChild(messageSpan);
		messageBox.appendChild(divMessage);
		/*
		 * 将滚动条滚动到最下面以便于查看最新显示的消息
		 */
		messageBox.scrollTop = messageBox.scrollHeight;
	}
}