<html>
<!程序名称：5-1.php>
<!程序功能：PHP算术运算符的使用。>

<head>
	<title>PHP算术运算符的使用</title>
</head>
<body>
<?php
	 //加法运算。 
	$a=3+5;
	//减法运算。 
	$b=18-10;
	//乘法运算。 
	$c=3*6;
	//可以整除的运算。 
	$d=18/3;
	//不可以整除的运算。
	$e=10/3;
	//整数的求模运算。 
	$a1=8%7;
	//双精度型的求模运算。 
	$a2=0.8%0.7;
	echo"加法运算：3+5=";
	echo $a;
	echo"<br>";
	echo"减法运算：18-10=";
	echo $b;
	echo"<br>";
	echo"乘法运算：3*6=";
	echo $c;
	echo"<br>";
	echo"整数相除：18/3=";
	echo $d;
	echo"<br>";
	echo"不能整除的运算：10/3=";
	echo $e;
	echo"<br>";
	echo"整数的求模：8%7=";
	echo $a1;
	echo"<br>";
	echo"双精度的求模：0.8%0.7=";
	echo $a2;
	echo"<br>";
?>
</body>
</html>