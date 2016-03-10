<html>
<!程序名称：8-21.php>
<!程序功能：PHP中获取文件信息函数的使用。>

<head>
	<title>PHP中获取文件信息函数的使用</title>
</head>
<body>
<?php	
		//stat()的使用. 
		echo"stat()的使用<br>";
		$arr1=stat("aa.txt");
		for($i=0;$i<count($arr1);$i++)
		{
		 		echo"\$arr1[$i]=$arr1[$i];";
		}
		echo"<br>";
		//file_exists()等4函数的使用.
		echo"判断文件是否存在、是否可读、是否可写、是否可执行的函数<br>";
		echo file_exists("aa.txt")."<br>";
		echo is_readable("aa.txt")."<br>";
		echo is_writeable("aa.txt")."<br>";
		echo is_executable("aa.txt")."<br>";
?>	 
	</body>
	</html>