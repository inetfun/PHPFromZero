<html>
<!�������ƣ�8-19.php>
<!�����ܣ�PHP��Ŀ¼����������ʹ�á�>

<head>
	<title>PHP��Ŀ¼����������ʹ��</title>
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