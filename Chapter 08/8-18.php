<html>
<!程序名称：8-18.php>
<!程序功能：PHP中的检验日期函数的使用。>

<head>
	<title>PHP中的检验日期函数的使用</title>
</head>
<body>
<?php	
		//返回值为1. 
	 	echo checkdate(4,23,2008);
	 	echo"<br>";
	 	//返回值为空. 
	 	echo checkdate(4,231,2008);
?>	 
	</body>
	</html>