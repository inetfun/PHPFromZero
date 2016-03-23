/*
 * @description: ColorPicker模块
 */
/*
 * @class: ColorPicker
 * @description: 拾色器类
 */
var ColorPicker = Class.create();
ColorPicker.prototype = {
	/*
	 * @description:构造函数
	 * @param: dom,HTMLElement,存放拾色器的页面元素容器
	 * @param: onSelect,Function,在用户选取颜色后调用的回调函数
	 */
	initialize:function(dom,onSelect)
	{
		/*
		 * 填充数据到对应的属性中
		 */
		this.dom = dom;
		this.onSelect = onSelect;
		this.colorBars = {};
		/*
		 * 创建色条对象
		 */
		this.createColorBar();
	},
	/*
	 * @description:创建R,G,B三个色条对象
	 */
	createColorBar:function()
	{
		var colorBars = this.colorBars,dom = this.dom;
		colorBars['R'] = new ColorBar(this,document.createElement('div'),'R');
		colorBars['G'] = new ColorBar(this,document.createElement('div'),'G');
		colorBars['B'] = new ColorBar(this,document.createElement('div'),'B');
		dom.appendChild(colorBars['R'].dom);
		dom.appendChild(colorBars['G'].dom);
		dom.appendChild(colorBars['B'].dom);
	},
	/*
	 * @description: 获取当前颜色代码
	 */
	getColor:function()
	{
		var colorBars = this.colorBars;
		var color = [colorBars['R'].current.color['R'],colorBars['G'].current.color['G'],colorBars['B'].current.color['B']];
		return '#' + color.invoke('toColorPart').join('');
	},
	/*
	 * @description: 在用户选择颜色时调用的方法
	 */
	select:function()
	{
		if(this.onSelect)this.onSelect(this.getColor());
	}
}
/*
 * @class: ColorBar
 * @description: 色条类
 */
var ColorBar = Class.create();
ColorBar.prototype = {
	/*
	 * @description：构造函数
	 * @param: colorPicker,ColorPicker,所属的ColorPicker对象
	 * @param: dom,HTMLElement,用于存放色条的页面元素容器
	 * @param: type,string,色条的类型,'R','G','B'为三个可供选择的值
	 */
	initialize:function(colorPicker,dom,type)
	{
		/*
		 * 填充数据到对应的属性中
		 */
		this.colorPicker = colorPicker;
		this.dom = dom;
		this.type = type.toUpperCase();
		/*
		 * 创建色条
		 */
		this.create();
	},
	/*
	 * @description: 创建色条
	 */
	create:function()
	{
		var colorObject = {'R':0,'G':0,'B':0},dom = this.dom,type = this.type,span,color;
		/*
		 * 清空容器内容并设置其样式
		 */
		dom.innerHTML = '';
		$(dom).setStyle({
			'display':'block',
			'float':'left',
			'clear':'both',
			'marginBottom':'1px'
		});
		var __this = this;
		/*
		 * 创建每个颜色单位
		 */
		$R(0,255).each(function(colorValue)
		{
			colorObject[type] = colorValue;
			span = document.createElement('span');
			color = '#'+[colorObject['R'],colorObject['G'],colorObject['B']].invoke('toColorPart').join('');
			$(span).setStyle({
				'backgroundColor':color,
				'width':'1px',
				'height':'12px',
				'float':'left',
				'cursor':'pointer'
			});
			span.color = {};
			Object.extend(span.color,colorObject);
			Event.observe(span,'mousedown',__this.select.bindAsEventListener(__this));
			if(colorValue == 0)
			{
				__this.changeCurrent(span);
			}
			dom.appendChild(span);
		});
	},
	/*
	 * @description: 选择颜色
	 * @param: evt,Event,事件对象
	 */
	select:function(evt)
	{
		var colorSpan = Event.element(evt);
		this.changeCurrent(colorSpan);
		this.colorPicker.select();
	},
	/*
	 * @description: 切换当前选中的颜色
	 */
	changeCurrent:function(colorSpan)
	{
		if(this.current)
		{
			var colorObject = this.current.color;
			var color = '#'+[colorObject['R'],colorObject['G'],colorObject['B']].invoke('toColorPart').join('');
			$(this.current).setStyle({
				'backgroundColor':color
			});
		}
		this.current = colorSpan;
		$(colorSpan).setStyle({
			'backgroundColor':'#fff'
		});
	}
}