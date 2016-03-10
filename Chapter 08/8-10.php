<html>
<!程序名称：8-10.php>
<!程序功能：多维数组的创建。>

<head>
	<title>多维数组的创建</title>
</head>
<body>
<?php	
	 			$myarr[0][0]=1;
				 $myarr[0][1]=1.111e2;
				 $myarr[1][0]="php";
				 $myarr[1]["str"]="string";
	
	for($i=0;$i<count($myarr);$i++)
	{
	 			for($j=0;$j<count($myarr[$i]);$j++)
	 			{
	 			 		$Print=each($myarr[$i]);
	 					echo" $Print[value]<p>";
	 			}
	}
?>	 
	</body>
	</html>