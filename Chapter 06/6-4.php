<?php
//程序名称:6-4.php
 //程序功能:对用户身份和密码的验证
 
	//给用户名和密码设定的值 
	$nameuser="admin";
	$namepsw="admin";
	$tijiao="";
if($tijiao=="提交")
{ 
	//获取表单的数据
	$nameuser=$user;
	$namepsw=$psw; 
if($nameuser==""||$namepsw="")
	echo "用户名和密码不能为空!!!!!!!!!";
elseif($nameuser="admin"||$namepsw="admin")
	echo "正在验证密码!!";
else
    echo"用户名和密码不符!!"
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>身份和密码验证实例</title>
</head>
<body>
<?php
}
else
{
?>
<form  method="post" action="7-4.php" name="yz" >
	
	 <p><tr>
		<td align="center">
		用户名:<input type="text" size="20" name="user" value="admin" >
		</td>
	</tr><p>
	<tr>
		<td align="center">
		密  码:<input type="psw"  size="20" name="psw"  value="admin">
		</td>
	</tr><p>
	<tr>
		<td align="center">
		<input type="submit" value="提交" name="tijiao"/>
		<input type="reset" value="重设" />
		</td>
	</tr>


<?php
}
?>
</body>
</html>
