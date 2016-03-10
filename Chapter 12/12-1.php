<html>
<!--程序名称:12-1.php-->
<!--程序功能:连接函数与关闭函数的使用.-->

<head>
	  <title>连接函数与关闭函数的使用</title>
<body> 
<?php
$mysqluser="root";
$mysqlpass="passwd";
	 $connect=mysql_connect("localhost",$mysqluser,$mysqlpass);
	 echo $connect;
	 echo"<br>";
	 mysql_close();
	 $pconnect=mysql_pconnect("localhost",$mysqluser,$mysqlpass);
	 echo $pconnect;
?>
</body>
</html>