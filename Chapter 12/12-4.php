<html>
<!--��������:12-4.php-->
<!--������:��ȡ�ֶγ��ȵĺ���ʹ��.-->

<head>
	  <title>�ֻ�ȡ�ֶγ��ȵĺ���ʹ��</title>
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
			 while(mysql_fetch_row($result))
			 {
			  	$arr=mysql_fetch_lengths($result);
			  	for($i=0;$i<count($arr);$i++)
			  	{
				  echo $arr[$i]."";
				  }
				  echo"<br>";
			 }
			 mysql_close();
		?>
		</body>
		</html>