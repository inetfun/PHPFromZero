<html>
<!�������ƣ�8-4.php>
<!�����ܣ��ַ����Ĳ��Һ�����ʹ�á�>

<head>
	<title>�ַ����Ĳ��Һ�����ʹ��</title>
</head>
<body>
 <?php	
 		$str="abcdeabcde";
 		//���0�� 
 		echo strpos($str,"ab");
 		echo"<br>";
 		//ȡ���һ�γ��ֵ�λ�ã����5�� 
 		echo strrpos($str,"ab");
 		echo"<br>";
 		//ȡ���ַ��� 
 		echo strrpos($str,"ac");
 		echo"<br>";
 		//97Ϊ��ĸa ��ASCII�룬 
 		echo strpos($str,97);
 		echo"<br>";
 		//�ӵ�2���ַ���ʼ�ң� 
 		echo strpos($str,"ab",1);
 		echo"<br>";
 		//û�ҵ������ؿա� 
 		echo strpos($str,"ba");
 		echo"<br>";
 		//$varΪ�գ��������1�� 
 		echo empty($var);
?>	
<h1>	  
	</body>
	</html>