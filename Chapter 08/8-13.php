<html>
<!�������ƣ�8-13.php>
<!�����ܣ� ʹ������ʵ������Ԫ�ص�����>

<head>
	<title> ʹ������ʵ������Ԫ�ص�����</title>
</head>
<body>
<?php	
		$arr1=array("a","b","c","f","e","d");
		arsort($arr1);
		for($i=0;$i<count($arr1);$i++)
		{
		 		$output=each($arr1);
		 		echo"\$arr1[$output[key]]=$output[value];\n";
		}
		echo"<p>";
		asort($arr1);
		for($i=0;$i<count($arr1);$i++)
		{
		 		$output=each($arr1);
		 		echo"\$arr1[$output[key]]=$output[value];\n";
		}
		//sort()  rsort()��ʹ��.
		 $arr2=array("a","b","c","f","e","d");
		 rsort($arr2);
		 for($i=0;$i<count($arr2);$i++)
		 {
		  		echo"\$arr2[$i]=$arr2[$i];\n";
		 }
		 echo"<p>";
		 sort($arr2);
		 for($i=0;$i<count($arr2);$i++)
		 {
		  		echo"\$arr2[$i]=$arr2[$i];\n";
		 }
		 //ksort()��ʹ��.
		 $arr3=array("d"=>"one","c"=>"two","b"=>"three","a"=>"four");
		 ksort($arr3);
		 for($i=0;$i<count($arr3);$i++)
		 {
		  		$output=each($arr3);
		  		echo"\$arr3[$output[key]]=$output[value];\n";
		 } 
		 //usort()  uasort()  uksort()��ʹ��.
		 function cmp($arg1,$arg2)
		 {
		  		  if($arg1==$arg2)return o;
		  		   return($arg1>$arg2)?-1:1;
		 } 
		 $arr4=array(3=>"a",2=>"b",1=>"c",4=>"d",0=>"e");
		 usort($arr4,cmp);
		 while(list($key,$value)=each($arr4))
		 {
		  			echo"\$arr4[$key]=$value;\n";
		 }
		 echo"<br>";
		 $arr5=array(3=>"a",2=>"b",1=>"c",4=>"d",5=>"e");
		 uasort($arr5,cmp);
		 while(list($key,$value)=each($arr5))
		 {
		  			echo"\$arr5[$key]=$value;\n";						 
		  }
		  echo"<br>";
		  $arr6=array(3=>"a",2=>"b",1=>"c",4=>"d",5=>"e");
		  uksort($arr6,cmp);
		  while(list($key,$value)=each($arr6))
		  {
		   			echo"\$arr6[$key]=$value;\n";
		  }
?>	 
	</body>
	</html>