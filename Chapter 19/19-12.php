﻿<?php
  /**************************************/
  /*		名称：19-12.php	
  /*		功能：取消“锁定”操作		
  /**************************************/

  require('config.inc.php');
  //判断是否为管理员
  if ($_SESSION['username'] == ADMIN_USER)
  {
	//取得文章ID
	$id=$_POST['id'];
	//取消“锁定”的SQL语句
	$sql = "UPDATE forum_topic SET locked='0' WHERE id='$id'";
	$result=mysql_query($sql);
	if($result)
	{
		//跳转页面
		header("Location: view_topic.php?id=$id");
	}
	else {
		ExitMessage("数据库操作错误！");
	}
  } else {
	ExitMessage("你没有管理权限！");
  }
?>
