<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
!程序名称：12-22.php>
<!程序功能：处理查询信息页面程序。>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询数据库</title>
</head>
<body>
<?php
$formdata=array();
if(count($http_post_vars))
{
while(list($key,$value)=each($http_post_vars))
{
 $formdata[strtolower($key)]=$value;
}
}
$mysqluser="root";
$mysqlpass="123456";
$dbname="mydb";
$tablename="user";
$limit="5";
?>
<?php
$name=$_POST['name'];
echo $name;
$db_connect=mysql_connect('localhost',$mysqluser,$mysqlpass);
mysql_query("set names 'gbk'");
if(!$db_connect)
{
?>
<table>
<tr><td>
	数据库连接不成功
</td></tr>
</table>
<?php
exit;
}
?>
<?php
$seldb=mysql_select_db($dbname,$db_connect);
$sql="select * from `user` where `name`='$name'";
echo $sql;
$result=mysql_query($sql,$db_connect);
echo mysql_num_rows($result);
$rows=mysql_fetch_array($result)
?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
<tr>
	<td><div align="center">id</div></td>
	<td><div align="center">姓名</div></td>
	<td><div align="center">年龄</div></td>
	<td><div align="center">电话</div></td>
	<td><div align="center">地址</div></td>
	<td><div align="center">班级</div></td>
</tr>
<tr>
	<td><div align="center"><?php echo $rows['id']; ?></div></td>
	<td><div align="center"><?php echo $rows['name']; ?></div></td>
	<td><div align="center"><?php echo $rows['age']; ?></div></td>
	<td><div align="center"><?php echo $rows['phone']; ?></div></td>
	<td><div align="center"><?php echo $rows['address']; ?></div></td>
	<td><div align="center"><?php echo $rows['education'];?></div></td>
</tr>
</table>
<?php
echo"这就是你要查询的结果";
?>
</body>
</html>