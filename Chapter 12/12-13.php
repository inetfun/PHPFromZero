<html>
<!�������ƣ�12-13.php>
<!�����ܣ������¼�ĳ���>

<head>
	  <title>�����¼�ĳ���</title>
</head>
<body>
<?php
  $mysqluser="root";
$mysqlpass="123456";
$dbname="news";
$tablename="tnews";
$limit="5";
mysql_connect('localhost',$mysqluser,$mysqlpass);
mysql_select_db($dbname);
mysql_query("set names 'gb2312'");
$query="insert into $tablename (id,title,text)
	 	values(null,'$title','$text')";
	 	echo $query;
	 	echo"<br>";
	 	mysql_query($query);
	 	echo "��������Ѿ����ӡ�";
?>
</body>
</html>