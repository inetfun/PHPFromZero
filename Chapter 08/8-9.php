<html>
<!�������ƣ�8-9.php>
<!�����ܣ�����Ĵ�����>

<head>
	<title>����Ĵ���</title>
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