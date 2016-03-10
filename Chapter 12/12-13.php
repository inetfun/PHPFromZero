<html>
<!程序名称：12-13.php>
<!程序功能：插入记录的程序。>

<head>
	  <title>插入记录的程序</title>
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
	 	echo "你的新闻已经增加。";
?>
</body>
</html>