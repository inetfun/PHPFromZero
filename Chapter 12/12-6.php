<html>
<!--程序名称:12-6.php-->
<!--程序功能:实现数据表记录显示.-->

<head>
	  <title>实现数据表记录显示</title>
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
	 $result=mysql_query("select * from $tablename");
	 		echo"<table border=1>";
	 		echo"<tr><td>name</td><td>address</td>
			 	<td>tel</td></tr>";
			 	while($arr=mysql_fetch_array($result))
			 	{
				 	echo"<tr>";
				 	echo"<td>".$arr["name"]."</td>";
				 	echo"<td>".$arr["id"]."</td>";
				 	echo"<td>".$arr["tel"]."</td>";
				 	echo"</tr>";
				 }
			 echo"</table>";
			 mysql_data_seek($result,0);
			 echo"<table border=1>";
			 echo"<tr><td>name</td><td>address</td>
			 	<td>tel</td></tr>";
			 	while($arr=mysql_fetch_row($result))
			 	{
				 	echo"<tr>";
				 	echo"<td>".$arr[0]."</td>";
				 	echo"<td>".$arr[1]."</td>";
				 	echo"<td>".$arr[2]."</td>";
				 	echo"</tr>";
				 }
				 echo"</table>";
			 mysql_close();
		?>
		</body>
		</html>