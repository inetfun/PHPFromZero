<html>
<!--��������:12-2.php-->
<!--������:SQLִ����亯����ʹ��.-->

<head>
	  <title>SQLִ����亯����ʹ��</title>
<body> 
<?php
$mysqluser="root";
$mysqlpass="passwd";
$dbname="news";
$tablename="tnews";
$limit="5";
	 $connect=mysql_connect("localhost",$mysqluser,$mysqlpass);
	 mysql_select_db("$dbname");
	 $result1=mysql_query("select * from $tablename");
	 //$result2=mysql_db_query("$dbname","select * from $tablename");
	 echo $result1;
	 echo"<br>";
	 echo $result2; 
	 mysql_close();
	
?>
</body>
</html>