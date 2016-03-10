<html>
<!程序名称：8-19.php>
<!程序功能：PHP中目录操作函数的使用。>

<head>
	<title>PHP中目录操作函数的使用</title>
</head>
<body>
<?php	
		$handle=opendir("C:\WINDOWS");
		rewinddir($handle);
		while($filename=readdir($handle))
		{
		 		echo $filename."\n";
		}
		closedir($handle);
?>	 
	</body>
	</html>