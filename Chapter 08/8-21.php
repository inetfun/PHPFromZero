<html>
<!�������ƣ�8-21.php>
<!�����ܣ�PHP�л�ȡ�ļ���Ϣ������ʹ�á�>

<head>
	<title>PHP�л�ȡ�ļ���Ϣ������ʹ��</title>
</head>
<body>
<?php	
		//stat()��ʹ��. 
		echo"stat()��ʹ��<br>";
		$arr1=stat("aa.txt");
		for($i=0;$i<count($arr1);$i++)
		{
		 		echo"\$arr1[$i]=$arr1[$i];";
		}
		echo"<br>";
		//file_exists()��4������ʹ��.
		echo"�ж��ļ��Ƿ���ڡ��Ƿ�ɶ����Ƿ��д���Ƿ��ִ�еĺ���<br>";
		echo file_exists("aa.txt")."<br>";
		echo is_readable("aa.txt")."<br>";
		echo is_writeable("aa.txt")."<br>";
		echo is_executable("aa.txt")."<br>";
?>	 
	</body>
	</html>