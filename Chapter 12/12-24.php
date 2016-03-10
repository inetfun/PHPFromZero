<html>
<!程序名称：12-23.html>
<!程序功能：模糊查询的提交页面程序。>

<head>
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
$username='root';
$password='123456';
?>
<table>
<tr><td>
<?php
$name=$_POST['keyword'];
echo $name;
echo"连接数据库";
$db_connect=@mysql_connect('localhost',$username,$password);
mysql_query("set names 'gbk'");
if(! $db_connect)
{
echo" 数据库连接不成功";
?>
</td>
</tr>
</table>professional like "%" & strtemp & "%" and
<?php
exit;
}
?>
<?php
$seldb=@mysql_select_db('mydb',$db_connect);
$selectquery="select * from user where name like '%$name%'or age like '%$name%'
or phone like '%$name%'or address like '%$name%'or education like '%$name%' order
by id desc";
$selectdb=@mysql_query($selectquery,$db_connect);
if(! $selectquery)
{
echo"SQL执行不成功";
}
$count=@mysql_num_rows($selectdb);
if($count<0)
{
echo"没有记录";
}
else
{
echo"有$count条记录";
}
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
<?php
for($i=0;$i<$count;$i++)
{
$records=@mysql_fetch_object($selectdb);
?>
<tr>
<td><div align="center"><?php echo $records->id ?></div></td>
<td><div align="center"><?php echo $records->name ?></div></td>
<td><div align="center"><?php echo $records->age ?></div></td>
<td><div align="center"><?php echo $records->phone ?></div></td>
<td><div align="center"><?php echo $records->address ?></div></td>
<td><div align="center"><?php echo $records->education ?></div></td>
</tr>
<?php
}
?>

<?php
$db_close=mysql_close($db_connect);
?>
<p>关闭数据库!</p>
</body>
</html>