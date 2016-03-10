<html>
<!程序名称：4-11.php>
<!程序功能：全局变量的使用。>

<head>
	<title>全局变量的使用</title>
</head>
<body>
<?php 
	 $a1=1;
	 //此处声明变量。
	 //表示变量为全局变量。 
	 function a()
	 {
	  echo"未使用global命令：";
	  echo $a1;
	  //此处变量为函数的内部变量。 
	  echo"<br>";
	 }
	 function b()
	 {
	  global $a1;
	  //此处声明变量为全局变量。 
	  echo"使用global命令：";
	  echo $a1;
	  echo"<br>";
	 }
	 function c()
	 {
	  global $a2;
	  // 此处声明变量为全局变量。
	  $a2=2; 
	 }
	 echo"在函数体外：";
	 echo $a1;
	 echo"<br>";
	 //函数 
	 a();
	 b();
	 c();
	 echo"在函数外使用函数体内的变量：";
	 echo $a2;
	 echo"<br>";
?>
</body>
</html>