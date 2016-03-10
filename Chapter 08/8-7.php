<html>
<!程序名称：8-7.php>
<!程序功能：字符串的比较函数的使用。>

<head>
	<title>字符串的比较函数的使用</title>
</head>
<body>
 <?php	
 		$str1="student";
 		$str2="define";
 		$str3="final";
 		$str4="definef";
		echo strcspn($str1,$str2);
		echo"<br>";
		echo strspn($str3,$str4);
		echo"<br>";
?>	
<h1>	  
	</body>
	</html>