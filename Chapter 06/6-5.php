<?php
//�������ƣ�6-5.php
//�����ܣ�ͨ��switch��ʾ�ܼ�
 
 //��ǰ������Ϊ�ж�����
switch (date("D"))
{
 	//����һ�����
 	case "Mon":
	 	 echo "����һ";
	 	  	  break;
	//���ڶ������
	case "Tue":
	 	 echo "���ڶ�";
	 	  	  break;
	//�����������
	case "Wed":
	 	 echo "������";
	 	  	  break;
 	//�����ĵ����
 	case "Thu":
 	  	 echo "������";
 		 	  break;
 	//����������
 	case "Fri":
 		 echo "������";
 		 	  break;
 	//������֮����������
 	default:
  		echo "����ĩ";
  			 break;
}
?> 
 
 