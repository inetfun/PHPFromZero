<html>
<!程序名称：4-9.php>
<!程序功能：常量的定义。>

<head>
	<title>常量的定义</title>
</head>
<body>
<?php
	 //定义常量 MY_CONSTANT为字符串。 
	 define("MY_CONSTANT","定义常量是字符串");
	 //定义常量C_2为双精度数。 
	 define("C_2",99.9);
	 //在浏览器上输出常量MY_CONSTANT的值。 
	 echo"MY_CONSTANT:";
	 echo MY_CONSTANT;
	 //换行。 
	 echo"<br>";
	 //在浏览器中输出常量C_2的值。 
	 echo"C_2:";
	 echo C_2;
	 echo"<br>";
?>
</body>
</html>