<html>
<!--��������:12-1.php-->
<!--������:���Ӻ�����رպ�����ʹ��.-->

<head>
	  <title>���Ӻ�����رպ�����ʹ��</title>
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