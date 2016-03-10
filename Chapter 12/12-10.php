<html>
<!--程序名称12-9.ph10-->
<!--程序功能:有条件的查询特定的数据记录程序

<head>
  <title>查询特定的数据记录程序</title>
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
	 $get=mysql_query("select * from $tablename where title='星期一'         ");
	 $result=mysql_fetch_array($get);
	 	echo"<h1>$result[1]</h1>";
	 	echo "$result[2]<br>\n";

?>

</body>
</html>