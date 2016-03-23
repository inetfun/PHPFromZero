﻿<?php
  /**************************************/
  /*		名称：19-8.php		
  /*		功能：发表文章程序			
  /**************************************/

  require('config.inc.php');
  if (!$_SESSION['username'])
  {
	//如果用户未登录，显示错误信息
	include('header.inc.php');	//头文件
?>
<h2>创建新贴</h2>
<h3>未注册的用户</h3>
<p>对不起，请<a href="create_user.php">注册</a>新用户
	或者进行<a href="logon_form.php">登录</a>。
</p>
<?php 
	include('footer.inc.php');		//尾文件
  } else {
	//获得用户信息
	$username = $_SESSION['username'];
	$sql = "SELECT * from forum_user WHERE username='$username'";
	$result = mysql_query($sql);
	$info = mysql_fetch_array($result);
	//取得传递来的值
	//标题
	$topic	= filterBadWords($_POST['topic']);		//标题的脏字过滤
	//正文
	$detail	= filterBadWords($_POST['detail']);		//正文的脏字过滤
	//发帖人
	$name	= $_SESSION['username'];
	//电子邮件地址
	$email	= $info['email'];
	//是否置顶
	$sticky	= $_POST['sticky'];
	//是否锁定
	$locked	= $_POST['locked'];
	//数据合法性检查
	if (!$topic)
	{
		ExitMessage("请输入标题！");
	}
	if (!$detail)
	{
		ExitMessage("请输入正文！");
	}
	//判断是否为锁定状态
	if ($locked == "on" && $name == ADMIN_USER) { 
		$locked = 1; 
	}
	else {
		$locked = 0; 
	}
	//判断是否置顶状态
	if ($sticky == "on" && $name == ADMIN_USER) {
		$sticky = 1;
	} 
	else {
		$sticky = 0;
	}
	//将数据插入数据库
	$sql="INSERT INTO forum_topic(topic, detail, name, email, datetime, locked, sticky)
		 VALUES('$topic', '$detail', '$name', '$email',NOW(), '$locked', '$sticky')";
	$result=mysql_query($sql);
	if($result)
	{
		//成功后，跳转页面到论坛主页面
		header("Location: main_forum.php");
	}
	else 
	{
		ExitMessage("数据库错误！");
	}
}
?>
