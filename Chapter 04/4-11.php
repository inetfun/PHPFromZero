<html>
<!�������ƣ�4-11.php>
<!�����ܣ�ȫ�ֱ�����ʹ�á�>

<head>
	<title>ȫ�ֱ�����ʹ��</title>
</head>
<body>
<?php 
	 $a1=1;
	 //�˴�����������
	 //��ʾ����Ϊȫ�ֱ����� 
	 function a()
	 {
	  echo"δʹ��global���";
	  echo $a1;
	  //�˴�����Ϊ�������ڲ������� 
	  echo"<br>";
	 }
	 function b()
	 {
	  global $a1;
	  //�˴���������Ϊȫ�ֱ����� 
	  echo"ʹ��global���";
	  echo $a1;
	  echo"<br>";
	 }
	 function c()
	 {
	  global $a2;
	  // �˴���������Ϊȫ�ֱ�����
	  $a2=2; 
	 }
	 echo"�ں������⣺";
	 echo $a1;
	 echo"<br>";
	 //���� 
	 a();
	 b();
	 c();
	 echo"�ں�����ʹ�ú������ڵı�����";
	 echo $a2;
	 echo"<br>";
?>
</body>
</html>