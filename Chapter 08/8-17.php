<html>
<!�������ƣ�8-17.php>
<!�����ܣ�ʱ�亯����ʱ������ڵ������ʽ��ʹ�á�>

<head>
	<title>ʱ�亯����ʱ������ڵ������ʽ��ʹ��</title>
</head>
<body>
<?php	
	 	echo"����ʱ��:".date("Y�� m�� j��,I,H:i:s");
		echo"<br>";
		echo"GMTʱ��:".gmdate("Y��m��j��,I,H:i:s",
			mktime(date(H),date(i),date(s),date(n),date(j),date(Y)));	
?>	 
	</body>
	</html>