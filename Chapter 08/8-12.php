<html>
<!�������ƣ�8-12.php>
<!�����ܣ��������±�Ĳ���������ʹ�á�>

<head>
	<title>�������±�Ĳ���������ʹ��</title>
</head>
<body>
<?php	
		//����count() sizeof()��ʹ��. 
		$arr=array("one","two","three","four");
		echo count($arr);
		echo"<br>";
		echo sizeof($arr);
		//����current() prev() next()��ʹ��. 
		$arr1=array(0,1,2,3,4,5);
		for($i=0;$i<3;$i++)
				echo($arr1);
		echo current($arr1);
		echo"<br>";
		echo prev($arr1);
		echo"<br>";
		echo next($arr1);
		echo"<br>";
		//����reset()��end()��ʹ��. 
		$arr2=array(0,1,2,3,4,5);
		echo end($arr2);
		echo"<br>";
		echo reset($arr2);
		echo"<br>";
		//����key()�ͺ���pos()��ʹ��. 
		$arr3=array("a"=>0,"b"=>1,"c"=>2,"d"=>3);
		next($arr3);
		echo key($arr3)."=".pos($arr3);
		echo"<br>";
		//����each()��ʹ��. 
		$arr4=array("a","b","c","f","e","d");
		for($i=0;$i<count($arr4);$i++)
		{
		 		$output=each($arr4);
		 		echo"\$arr4[$output[key]]=$output[value];\n";
		}
?>	 
	</body>
	</html>