<html>
<!�������ƣ�4-10.php>
<!�����ܣ������ĸ�ֵ��>

<head>
	<title>�����ĸ�ֵ</title>
</head>
<body>
<?php
	 //���峣�� MY_CONSTANTΪ1�� 
	 define("MY_CONSTANT",1);
	 //�����͡� 
	 $a=1;
	 $b=1+1;
	 $c=$b+MY_CONSTANT;
	 echo"�����ͣ�<br>";
	 echo"\$a="; 
	 echo $a;
	 echo"<br>";
	 echo "\$b=";
	 echo $b;
	 echo"<br>";
	 echo"\$c=";
	 echo $c;
	 echo"<br>";
	 //�����͡�
	 $d=0.1;
	 $e=0.1+0.1;
	 $f=$e+MY_CONSTANT;
	 echo"�����ͣ�<br>";
	 echo"\$d=";
	 echo $d;
	 echo"<br>";
	 echo"\$e=";
	 echo $e;
	 echo"<br>";
	 echo"\$f=";
	 echo $f;
	 echo"<br>";
	 //�ַ��͡�
	 $a2="text";
	 $b2="text"."_text";
	 $c2=$b2+MY_CONSTANT;
	 echo"�ַ��ͣ�<br>";
	 echo"\$a2=";
	 echo $a2;
	 echo"<br>";
	 echo"\$b2=";
	 echo $b2;
	 echo"<br>";
	 echo"\$c2=";
	 echo $c2;
	 echo"<br>"; 
?>
</body>
</html>