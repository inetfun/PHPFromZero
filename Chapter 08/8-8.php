<html>
<!�������ƣ�8-8.php>
<!�����ܣ��ַ���������ת��������ʹ�á�>

<head>
	<title>�ַ���������ת��������ʹ��</title>
</head>
<body>
 <?php	
 		$var1="1.23e56abc";
 		$var2="12abc";
 		$var3="12z";
 		$var4=123;
 		$var5=123.56;
 		$var6="1.234e56abc";
 		//�ַ���ת������. 
		echo doubleval($var1);
		echo"<br>";
		//�ַ���ת������. 
		echo intval($var2);
		echo"<br>";
		//�Ƚ��ַ���ת��Ϊ����,Ȼ��ת��Ϊ10������. 
		echo intval($var3,16);
		echo"<br>";
		//����ת�ַ���, 
		echo strval($var4);
		echo"<br>";
		//������ת�ַ���. 
		echo strval($var5);
		echo"<br>";
		if(settype($var6,"double"))
		{
		 		echo"$var6";
		 		echo"<br>";
		 		echo"type of\$svar is".gettype($var6);
		 		echo"<br>";
		}
?>	
<h1>	  
	</body>
	</html>