<html>
<!程序名称：4-10.php>
<!程序功能：变量的赋值。>

<head>
	<title>变量的赋值</title>
</head>
<body>
<?php
	 //定义常量 MY_CONSTANT为1。 
	 define("MY_CONSTANT",1);
	 //整数型。 
	 $a=1;
	 $b=1+1;
	 $c=$b+MY_CONSTANT;
	 echo"整数型：<br>";
	 echo"\$a="; 
	 echo $a;
	 echo"<br>";
	 echo "\$b=";
	 echo $b;
	 echo"<br>";
	 echo"\$c=";
	 echo $c;
	 echo"<br>";
	 //浮点型。
	 $d=0.1;
	 $e=0.1+0.1;
	 $f=$e+MY_CONSTANT;
	 echo"浮点型：<br>";
	 echo"\$d=";
	 echo $d;
	 echo"<br>";
	 echo"\$e=";
	 echo $e;
	 echo"<br>";
	 echo"\$f=";
	 echo $f;
	 echo"<br>";
	 //字符型。
	 $a2="text";
	 $b2="text"."_text";
	 $c2=$b2+MY_CONSTANT;
	 echo"字符型：<br>";
	 echo"\$a2=";
	 echo $a2;
	 echo"<br>";
	 echo"\$b2=";
	 echo $b2;
	 echo"<br>";
	 echo"\$c2=";
	 echo $c2;
	 echo"<br>"; 
?>
</body>
</html>