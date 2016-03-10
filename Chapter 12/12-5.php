<html>
<!--程序名称:12-5.php-->
<!--程序功能:字段函数使用.-->

<head>
	  <title>字段函数使用使用</title>
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
	 		echo"<table border=1";
	 		echo"<tr><td>name</td><td>type</td>
			 	<td>len</td><td>flags</td></tr>";
			 	for($i=0;$i<mysql_num_fields($result);$i++)
			 	{
				 	echo"<tr>";
				 	echo"<td>".mysql_field_name($result,$i)."</td>";
				 	echo"<td>".mysql_field_type($result,$i)."</td>";
				 	echo"<td>".mysql_field_len($result,$i)."</td>";
				 	echo"<td>".mysql_field_flags($result,$i)."</td>";
				 	echo"</tr>";
				 }
			 echo"</table>";
			 mysql_close();
		?>
		</body>
		</html>