<html>
<!�������ƣ�8-15.php>
<!�����ܣ���ָ�Ժ�������λ�ƺ��������ǡ������Ǻ�����ʹ�á�>

<head>
	<title>��ָ�Ժ�������λ�ƺ��������ǡ������Ǻ�����ʹ��</title>
</head>
<body>
<?php	
		//��ָ�Ժ�����ʹ��. 
		echo abs(-10);
		echo"<br>";
		echo floor(23.45);
		echo"<br>";
		echo round(123.678);
		echo"<br>";
		echo ceil(23.45);
		echo"<br>";
		//Բ���ʵ����. 
		echo pi();
		echo"<br>";
		echo exp(8);
		echo"<br>";
		echo pow(8,2);
		echo"<br>";
		echo sqrt(16);
		echo"<br>";
		echo log(5);
		echo"<br>";
		echo log10(8);
		echo"<br>";
		//���,��С������ʹ��.
		$max=max(2.1,"2.1");
		echo"(2.1,\"2.1\")"."���ֵ$max,"."����".gettype($max); 
		echo"<br>";
		$min=min(2.1,"2.1");
		echo"��Сֵ$min,"."����".gettype($min);
		echo"<br>";
		$max=max("al","2.1");
		echo"(\"al\",\"2.1\")"."���ֵ$max"."����".gettype($max);
		echo"<br>";
		$min=min(1,"al","2.1");
		echo"��Сֵ$min"."����".gettype($min);
		echo"<br>";
		echo number_format(123456.89);
		echo"<br>";
		echo number_format(123456.89,7);
		echo"<br>";
		//��λ�ƺ�����ʹ��.
		echo base_convert("35",10,2);
		echo"<br>";
		echo base_convert("35","10",16);
		echo"<br>"; 
		//����,�����Ǻ�����ʹ��.
		echo sin(M_PI/6);
		echo"<br>";
		echo cos(M_PI);
		echo"<br>";
		echo tan(M_PI/2);
?>	 
	</body>
	</html>