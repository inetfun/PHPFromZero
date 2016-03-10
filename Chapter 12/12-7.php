<html>
<!--程序名称:12-7.php-->
<!--程序功能:释放内存函数的使用.-->

<head>
	  <title>释放内存函数的使用</title>
</head>
<body>
	  <?php
	  $mysqluser="root";
	  $mysqlpass="123456";
	  $dbname="news";
	  $tablename="tnews";
	  $limit="5";
	 $connect=mysql_connect("localhost",$mysqluser,$mysqlpass);
	 mysql_select_db("$dbname"); 
	 $result=mysql_db_query("$dbname","select * from $tablename");
	 		echo mysql_free_result($result);
			 mysql_close();
		?>
		</body>
		</html>