<?php
//�������ƣ�8-24.php
//�����ܣ������ύ�������ݡ� 

 if($name=="")
  //��������Ϊ��
{
	echo "��������Ϊ��";
}
	else
	if($email=="")
{
	//EMAIL����Ϊ��
	echo "Email����Ϊ��";
}
	else
	if($nairong=="")
	{
		//���Բ���Ϊ��
		echo "�������ݲ���Ϊ��";
	}
	else
	{
		//�Կɶ�д��ʽ��ly.txt�ļ����ڴ洢����,����������½�һ��
		$fp=fopen("guestbook.dat","a++");
		//д������
		$t=date(Y��m��d��);
		//д����������
		$main= "����:<a href=\"mailto:$email\">
		$name</a>:($t)<br>����: $nairong <br><hr>";
		//д���ļ�
		$write=fwrite($fp,$main);
		fclose($fp);
		echo "���Գɹ�";
	}
?>
