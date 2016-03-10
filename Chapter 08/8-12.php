<html>
<!程序名称：8-12.php>
<!程序功能：对数组下标的操作函数的使用。>

<head>
	<title>对数组下标的操作函数的使用</title>
</head>
<body>
<?php	
		//函数count() sizeof()的使用. 
		$arr=array("one","two","three","four");
		echo count($arr);
		echo"<br>";
		echo sizeof($arr);
		//函数current() prev() next()的使用. 
		$arr1=array(0,1,2,3,4,5);
		for($i=0;$i<3;$i++)
				echo($arr1);
		echo current($arr1);
		echo"<br>";
		echo prev($arr1);
		echo"<br>";
		echo next($arr1);
		echo"<br>";
		//函数reset()和end()的使用. 
		$arr2=array(0,1,2,3,4,5);
		echo end($arr2);
		echo"<br>";
		echo reset($arr2);
		echo"<br>";
		//函数key()和函数pos()的使用. 
		$arr3=array("a"=>0,"b"=>1,"c"=>2,"d"=>3);
		next($arr3);
		echo key($arr3)."=".pos($arr3);
		echo"<br>";
		//函数each()的使用. 
		$arr4=array("a","b","c","f","e","d");
		for($i=0;$i<count($arr4);$i++)
		{
		 		$output=each($arr4);
		 		echo"\$arr4[$output[key]]=$output[value];\n";
		}
?>	 
	</body>
	</html>