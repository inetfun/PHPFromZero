<html>
<!--��������:12-7.php-->
<!--������:�ͷ��ڴ溯����ʹ��.-->

<head>
	  <title>�ͷ��ڴ溯����ʹ��</title>
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