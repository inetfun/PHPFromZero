<html>
<!程序名称：8-6.php>
<!程序功能：字符串的比较函数的使用。>

<head>
	<title>字符串的比较函数的使用</title>
</head>
<body>
 <?php	
 		$str1="ab";
 		$str2="abc";
		echo strcasecmp($str1,$str2);
		echo"<br>";
		echo strcmp($str2,$str1);
		echo"<br>";
		echo strcasecmp("abc","ABC");
		echo"<br>";
		echo strcmp("abc","ABC");
		echo"<br>";
?>	
<h1>	  
	</body>
	</html>