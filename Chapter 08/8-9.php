<html>
<!程序名称：8-9.php>
<!程序功能：数组的创建。>

<head>
	<title>数组的创建</title>
</head>
<body>
<?php	
 	$myarr=array
	 (
	 			0=>1,
				 2=>1.111e2,
				 1=>"php",
				 "str"=>"string"
	);
	for($i=0;$i<count($myarr);$i++)
	{
	 			$Print=each($myarr);
	 			echo" $Print[value]<p>";
	}
?>	 
	</body>
	</html>