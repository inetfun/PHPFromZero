<html>
<!程序名称：8-16.php>
<!程序功能：随机函数的使用。>

<head>
	<title>随机函数的使用</title>
</head>
<body>
<?php	
	 srand(time());
	 echo rand(1,100);
	 echo"<br>";
	 echo rand(1,1000);
	 echo"<br>";
	 echo rand(10,90);
	 echo"<br>";
	 echo getrandmax();
	 echo"<br>";
?>	 
	</body>
	</html>