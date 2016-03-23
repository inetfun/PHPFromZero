/*
 * @Descrption:Face模块
 */
/*
 * @class: Face
 * @description: Face类
 */
var Face = Class.create();
Face.prototype = {
	/*
	 * @description:构造函数
	 * @param: name,string,表情名称
	 * @param: facePic,string,表情图标地址
	 * @param: onSelect,Function,在表情被选择时调用的回调函数
	 * @param: onLoaded,Function,在表情图标加载完成时调用的回调函数
	 */
	initialize:function(name,facePic,onSelect,onLoaded)
	{
		/*
		 * 将数据写入到对应的属性中
		 */
		this.name = name;
		this.facePic = facePic;
		this.onSelect = onSelect;
		this.onLoaded = onLoaded;
		/*
		 * 创建Image对象保存表情图标
		 */
		this.dom = new Image();
		if(onLoaded)
		{
			this.dom.onload = this.onLoaded.bindAsEventListener(this);
		}
		this.dom.src = this.facePic;
		$(this.dom).setStyle({
			'cursor':'pointer'
		});
		/*
		 * 为图标对象注册click事件句柄
		 */
		Event.observe(this.dom,'click',this.select.bind(this));
		/*
		 * 将当前实例保存到静态属性instances中
		 */
		Face.instances[this.name] = this;
	},
	/*
	 * @description:获取HTML表示
	 */
	getHTML:function()
	{
		var html = '<img src="' + this.facePic + '" alt="' + this.name + '" title="' + this.name + '" />';
		return html;
	},
	/*
	 * @description:选择表情图标时被调用的方法
	 */
	select:function()
	{
		if(this.onSelect)
		{
			this.onSelect(this);	
		}
	}
}
/*
 * @property:instance
 * @type:object
 * @description:静态属性，保存所有Face实例对象
 */
Face.instances = {};
/*
 * @property:pageSize
 * @type:int
 * @description:静态属性，每页显示的表情数
 */
Face.pageSize = 6;
/*
 * @property:currentPage
 * @type:int
 * @description:静态属性，当前页数
 */
Face.currentPage = 0;
/*
 * @property:totalPage
 * @type:int
 * @description:静态属性，总页数
 */
Face.totalPage = 0;
/*
 * @property:dom
 * @type:HTMLElement
 * @description:静态属性，用于呈现表情图标的页面元素容器
 */
Face.dom = null;
/*
 * @description:静态方法，显示所有表情图标到页面元素容器中
 */
Face.show = function()
{
	if(!Face.dom)
	{
		throw new Error('Face还未绑定到容器对象');
	}
	/*
	 * 清空容器内容
	 */
	Face.dom.innerHTML = '';
	/*
	 * 获取需要显示的Face对象并显示到容器中
	 */
	var faces = Object.values(Face.instances);
	Face.totalPage = Math.ceil((faces.length) / Face.pageSize) - 1;
	if(Face.currentPage > Face.totalPage)
	{
		return;	
	}
	var start = Face.currentPage * Face.pageSize;
	var end = start +　Face.pageSize;
	var currentFaces = faces.slice(start,end);
	currentFaces.each(function(face){
		Face.dom.appendChild(face.dom);											
	});
}
/*
 * @description: 静态方法，显示上一页的表情图标
 */
Face.prevPage = function()
{
	Face.currentPage --;
	if(Face.currentPage < 0)
	{
		Face.currentPage = 0;	
	}
	Face.show();
}
/*
 * @description: 静态方法，显示下一页的表情图标
 */
Face.nextPage = function()
{
	Face.currentPage ++;
	if(Face.currentPage > Face.totalPage)
	{
		Face.currentPage = Face.totalPage;	
	}
	Face.show();
}
