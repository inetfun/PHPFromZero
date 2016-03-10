<html>
<!程序名称：8-17.php>
<!程序功能：时间函数和时间和日期的输出格式的使用。>

<head>
	<title>时间函数和时间和日期的输出格式的使用</title>
</head>
<body>
<?php	
	 	echo"本地时间:".date("Y年 m月 j日,I,H:i:s");
		echo"<br>";
		echo"GMT时间:".gmdate("Y年m月j日,I,H:i:s",
			mktime(date(H),date(i),date(s),date(n),date(j),date(Y)));	
?>	 
	</body>
	</html>