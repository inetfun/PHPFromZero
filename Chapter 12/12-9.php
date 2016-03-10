<html>
<!--程序名称12-9.php-->
<!--程序功能:有条件的选择数据-->
<head>
  <title></title>
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
	 mysql_query("set names 'gb2312'");
	 $get=mysql_query("select * from $tablename where id between '18' and '20'");
	 $result=mysql_fetch_array($get);
	 	echo"<h1>$result[1]</h1>";
	 	echo "$result[2]<br>\n";

?>

</body>

</html>