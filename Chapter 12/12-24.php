<html>
<!�������ƣ�12-23.html>
<!�����ܣ�ģ����ѯ���ύҳ�����>

<head>
<title>��ѯ���ݿ�</title>
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
echo"�������ݿ�";
$db_connect=@mysql_connect('localhost',$username,$password);
mysql_query("set names 'gbk'");
if(! $db_connect)
{
echo" ���ݿ����Ӳ��ɹ�";
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
echo"SQLִ�в��ɹ�";
}
$count=@mysql_num_rows($selectdb);
if($count<0)
{
echo"û�м�¼";
}
else
{
echo"��$count����¼";
}
?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
<tr>
<td><div align="center">id</div></td>
<td><div align="center">����</div></td>
<td><div align="center">����</div></td>
<td><div align="center">�绰</div></td>
<td><div align="center">��ַ</div></td>
<td><div align="center">�༶</div></td>
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
<p>�ر����ݿ�!</p>
</body>
</html>