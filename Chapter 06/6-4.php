<?php
//��������:6-4.php
 //������:���û���ݺ��������֤
 
	//���û����������趨��ֵ 
	$nameuser="admin";
	$namepsw="admin";
	$tijiao="";
if($tijiao=="�ύ")
{ 
	//��ȡ��������
	$nameuser=$user;
	$namepsw=$psw; 
if($nameuser==""||$namepsw="")
	echo "�û��������벻��Ϊ��!!!!!!!!!";
elseif($nameuser="admin"||$namepsw="admin")
	echo "������֤����!!";
else
    echo"�û��������벻��!!"
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ݺ�������֤ʵ��</title>
</head>
<body>
<?php
}
else
{
?>
<form  method="post" action="7-4.php" name="yz" >
	
	 <p><tr>
		<td align="center">
		�û���:<input type="text" size="20" name="user" value="admin" >
		</td>
	</tr><p>
	<tr>
		<td align="center">
		��  ��:<input type="psw"  size="20" name="psw"  value="admin">
		</td>
	</tr><p>
	<tr>
		<td align="center">
		<input type="submit" value="�ύ" name="tijiao"/>
		<input type="reset" value="����" />
		</td>
	</tr>


<?php
}
?>
</body>
</html>
