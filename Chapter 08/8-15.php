<html>
<!程序名称：8-15.php>
<!程序功能：幂指对函数、进位制函数、三角、反三角函数的使用。>

<head>
	<title>幂指对函数、进位制函数、三角、反三角函数的使用</title>
</head>
<body>
<?php	
		//幂指对函数的使用. 
		echo abs(-10);
		echo"<br>";
		echo floor(23.45);
		echo"<br>";
		echo round(123.678);
		echo"<br>";
		echo ceil(23.45);
		echo"<br>";
		//圆周率的输出. 
		echo pi();
		echo"<br>";
		echo exp(8);
		echo"<br>";
		echo pow(8,2);
		echo"<br>";
		echo sqrt(16);
		echo"<br>";
		echo log(5);
		echo"<br>";
		echo log10(8);
		echo"<br>";
		//最大,最小函数的使用.
		$max=max(2.1,"2.1");
		echo"(2.1,\"2.1\")"."最大值$max,"."类型".gettype($max); 
		echo"<br>";
		$min=min(2.1,"2.1");
		echo"最小值$min,"."类型".gettype($min);
		echo"<br>";
		$max=max("al","2.1");
		echo"(\"al\",\"2.1\")"."最大值$max"."类型".gettype($max);
		echo"<br>";
		$min=min(1,"al","2.1");
		echo"最小值$min"."类型".gettype($min);
		echo"<br>";
		echo number_format(123456.89);
		echo"<br>";
		echo number_format(123456.89,7);
		echo"<br>";
		//进位制函数的使用.
		echo base_convert("35",10,2);
		echo"<br>";
		echo base_convert("35","10",16);
		echo"<br>"; 
		//三角,反三角函数的使用.
		echo sin(M_PI/6);
		echo"<br>";
		echo cos(M_PI);
		echo"<br>";
		echo tan(M_PI/2);
?>	 
	</body>
	</html>