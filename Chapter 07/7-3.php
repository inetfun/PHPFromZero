<html>
<!�������ƣ�7-3.php>
<!�����ܣ����ر��ʽ��ֵ��>

<head>
	<title>���ر��ʽ��ֵ</title>
</head>
<body>
<?php
function my_func($InputText)
	{
	 		$my="<b>";
	 		$my .=$InputText;
	 		$my .="</b>";
	 		return($my);
	}
	echo"�ⲻ��һ���Զ��庯���ķ���ֵ!!!"; 
	echo"<br>";
	echo my_func("����һ���Զ��庯���ķ���ֵ!!!!!!!!!!!!!!");
	echo"<br>";
	echo"��Ҳ����һ���Զ��庯���ķ���ֵ!!!";
	echo"<br>";	 
?>
	</body>
	</html>