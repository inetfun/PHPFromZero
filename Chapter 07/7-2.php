<html>
<!�������ƣ�7-2.php>
<!�����ܣ�PHP�к����Ĳ�����>

<head>
	<title>PHP�к����Ĳ���</title>
</head>
<body>
<?php
//����ʡ���ڶ�����. 
function myfunc1($arg_1,$arg_2,$arg_3="�����ڶ��ַ���!")
	{
	 		 echo $arg_1+$arg_2;
	 		 echo $arg_3;
	 		 echo"<br>";
	}
	//����$arg_3ʡ��. 
	myfunc1(3,4);
	//�������$arg_3��ֵ. 
	myfunc1(6,6,"�����ڶ�ֵ");
	//�����Ĵ�ֵ. 
	 function myfunc2(&$argstr)
	 {
	  		$argstr=ereg_replace("/","-",$argstr);
	 }
	  		//�����ڸ�ֵ. 
	  		 $today="2008/04/20";
	  		 myfunc2($today);
	  		 //���ָ����ֵ. 
	  		 echo $today;		 
?>
	</body>
	</html>