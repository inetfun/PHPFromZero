<html>
<!程序名称：7-3.php>
<!程序功能：返回表达式的值。>

<head>
	<title>返回表达式的值</title>
</head>
<body>
<?php
function my_func($InputText)
	{
	 		$my="<b>";
	 		$my .=$InputText;
	 		$my .="</b>";
	 		return($my);
	}
	echo"这不是一个自定义函数的返回值!!!"; 
	echo"<br>";
	echo my_func("这是一个自定义函数的返回值!!!!!!!!!!!!!!");
	echo"<br>";
	echo"这也不是一个自定义函数的返回值!!!";
	echo"<br>";	 
?>
	</body>
	</html>