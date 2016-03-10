<html>
<!程序名称：8-22.php>
<!程序功能：PHP中读写函数的使用。>

<head>
	<title>PHP中读写函数的使用</title>
</head>
<body>
<?php	
		$fp=fopen("aa.txt","r");
		for($i=1;$i<15;$i++)
		{
		 	echo fgetc($fp);
		 	fseek($fp,$i);
		}
		echo "<br>".fgets($fp,1024)."<p>";
		rewind($fp);
		while($arr=fgetcsv($fp,1024))
		{
		 	echo count($arr)."items:";
		 	for($i=0;$i<count($arr);$i++)
		 	{
			 		echo $arr[$i];
			 }
			 echo"<br>";
		}
		rewind($fp);
		fgetss($fp,1024);
		echo "<br>".fgetss($fp,1024)."<br>";
		echo fgetss($fp,1024);
		fclose($fp);
		//读取函数的使用. 
		$fp1=fopen("aa.txt","r");
		fseek($fp1,10);
		echo fread($fp1,100)."<p>";
		fclose($fp1);
		//写入函数的使用. 
		$fp2=fopen("aa.txt","r");
		$str="添加的内容\n";
		fputs($fp2,$str);
		fwrite($fp2,$str);
		fclose($fp2);
?>	 
	</body>
	</html>