<html>
<!--名字：15-10.tpl--!>
<!--功能：smarty模板--!>

<head>
	<title>smarty模板</title>
</head>
<body>
{* 显示是smarty变量识符里的用*包含的文字为注释内容 *} 
{*页面头*} 
<{include file="header.tpl"}>
大家好，我叫<{$name}>, 欢迎大家阅读我的smarty学习材料。 
{*页面尾*} 
<{include file="foot.tpl"}>
</body>
</html>