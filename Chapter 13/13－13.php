<?php
//����������������������������������������������������������������������������������������������������
//���ƣ�13-13.php
//���ܣ�����ģ���PHP����
//����������������������������������������������������������������������������������������������������

//����smarty���ļ� 
include_once("../libs/Smarty.class.php");
//����smartyʵ������$smarty 
$smarty = new Smarty(); 
//����ģ��Ŀ¼ 
$smarty->template_dir = "./templates";
//���ñ���Ŀ¼
$smarty->compile_dir = "./templates_c"; 
//���ұ߽����Ĭ��Ϊ{}����ʵ��Ӧ�õ���������JavaScript 
//���ͻ�����Խ������<{}>��������
$smarty->left_delimiter = "<{"; 
$smarty->right_delimiter = "}>"; 
//����ģ������滻 
$smarty->assign("name", "ĳ����");
$smarty->display("index.tpl");
?>
