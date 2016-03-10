<html>
<!程序名称：8-8.php>
<!程序功能：字符串的类型转换函数的使用。>

<head>
	<title>字符串的类型转换函数的使用</title>
</head>
<body>
 <?php	
 		$var1="1.23e56abc";
 		$var2="12abc";
 		$var3="12z";
 		$var4=123;
 		$var5=123.56;
 		$var6="1.234e56abc";
 		//字符串转浮点型. 
		echo doubleval($var1);
		echo"<br>";
		//字符串转换整型. 
		echo intval($var2);
		echo"<br>";
		//先将字符串转换为数字,然后转换为10进制数. 
		echo intval($var3,16);
		echo"<br>";
		//整型转字符串, 
		echo strval($var4);
		echo"<br>";
		//浮点型转字符串. 
		echo strval($var5);
		echo"<br>";
		if(settype($var6,"double"))
		{
		 		echo"$var6";
		 		echo"<br>";
		 		echo"type of\$svar is".gettype($var6);
		 		echo"<br>";
		}
?>	
<h1>	  
	</body>
	</html>