<html>
<!�������ƣ�8-10.php>
<!�����ܣ���ά����Ĵ�����>

<head>
	<title>��ά����Ĵ���</title>
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