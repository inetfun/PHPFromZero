<html>
	<!--名称:17-1.php--!>
	<!--功能:留言板的头部显示页面--!>
	
<head>
<meta name="keywords" content="留言本" />
<meta name="Description" content="PHP留言本" />
<meta http-equiv=Content-Type content="text/html; charset=gb2312" />
<title>留言本</title>
<style type="text/css">
	.booktext {TABLE-LAYOUT: fixed; WORD-BREAK: break-all;
		WORD-WRAP: break-word; overflow: hidden; width:550px;}
</style>
</head>
<body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0>
<center>
<div align=center>
<!-- Header -->
<table border=0 cellpadding=0 cellspacing=0 width=730>
  <tr>
    <td class=MenuBar_B rowspan=8 width=1></td>
    <td height=8 class=MenuBar_B></td>
    <td class=MenuBar_B rowspan=8 width=1></td>
  </tr>
  <tr><td height=2></td></tr>
  <tr><td height=1 class=MenuBar_B></td></tr>
  <tr>
    <td height=74>
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <tr>
      <td></td>
      <td align=right>&nbsp;
</td>
      </tr>
    </table></td>
  </tr>
  <tr><td height=1 class=MenuBar_B></td></tr>
  <tr><td height=2></td></tr>
  <tr><td height=6 class=MenuBar_B></td></tr>
  <tr>
    <td>
	<table border=0 width=728 cellspacing=0 cellpadding=0 class=MenuBar>
    <tr>
      <td valign=middle id=MenuBar><div>&nbsp; &nbsp;
<a href="17-6.php">返回首页</a> ┊
<?php
	//根据管理员登录与否，输出不同的链接
	if($_SESSION['isAdmin'])
	{
	 	echo '<a href="17-10.php?logout=1">退出管理</a>';
	}
	else
	{
		echo '<a href="17-9.php">登录</a>';
	}
?>
┊</div></td>
      <td align=right id=MenuBar>&nbsp;</td>
    </tr>
    </table></td>
  </tr>
</table>
<br />
<!--头部信息-->
<table border=0 cellpadding=0 cellspacing=0 width=730 height=45>
<tr>
  <td valign=top></td>
  <td align=right valign=top>
  <img src="images/write.gif" height=32 width=32 border="0">
  					<a href="17-7.php"><strong>留言</strong></a>
  <img src="images/system.gif" height=32 width=32 border="0">
<?php
	//根据管理员登录与否，输出不同的链接
	if($_SESSION['isAdmin'])
	{
	 	echo '<a href="17-10.php?logout=1"><strong>退出管理</strong></a>';
	}
	else
	{
		echo '<a href="17-9.php"><strong>登录管理</strong></a>';
	}
?>
  </strong></a>&nbsp;</td>
</tr>
</table>
	<!--头部文件结束，正文开始部分-->
