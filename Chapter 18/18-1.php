<html>
<!�������ƣ�18-1.php>
<!�����ܣ�������š�>

<head>
	  <title>�������</title>
</head>
<body bgcolor="#ffffff" text="#000000">
<center>
<br><br>
<?php
$mysqluser="root";
$mysqlpass="123456";
$dbname="news";
$tablename="tnews";
$limit="5";
mysql_connect('localhost',$mysqluser,$mysqlpass);
mysql_select_db($dbname);
mysql_query("set names 'gb2312'");
if($action=="add")
	{
	 	$query="insert into $tablename (id,title,text)
	 	values(null,'$title','$text')";
	 	echo $query;
	 	mysql_query($query);
	 	echo "��������Ѿ����ӡ�";
	}
else
	{
	 	$script=getenv("$SCRIPT_NAME");
?>
<form action="18-1.php" method="post">
<input type="hidden" name="action" value="add">
���ű��⣺<br>
<input type="text" name="title" size=50><br><br>
�������ݣ�<br>
<textarea rows=5 cols=50 name="text">
</textarea>
<br>
<input type="submit"value="���">
<?php
	 }
?>
</center>
</body>
</html>