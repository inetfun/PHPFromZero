<html>
<!程序名称：7-2.php>
<!程序功能：PHP中函数的参数。>

<head>
	<title>PHP中函数的参数</title>
</head>
<body>
<?php
//可以省略内定参数. 
function myfunc1($arg_1,$arg_2,$arg_3="这是内定字符串!")
	{
	 		 echo $arg_1+$arg_2;
	 		 echo $arg_3;
	 		 echo"<br>";
	}
	//参数$arg_3省略. 
	myfunc1(3,4);
	//输入参数$arg_3的值. 
	myfunc1(6,6,"不用内定值");
	//参数的传值. 
	 function myfunc2(&$argstr)
	 {
	  		$argstr=ereg_replace("/","-",$argstr);
	 }
	  		//给日期赋值. 
	  		 $today="2008/04/20";
	  		 myfunc2($today);
	  		 //输出指定的值. 
	  		 echo $today;		 
?>
	</body>
	</html>