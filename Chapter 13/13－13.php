<?php
//××××××××××××××××××××××××××××××××××××××××××××××××××
//名称：13-13.php
//功能：处理模板的PHP程序
//××××××××××××××××××××××××××××××××××××××××××××××××××

//包含smarty类文件 
include_once("../libs/Smarty.class.php");
//建立smarty实例对象$smarty 
$smarty = new Smarty(); 
//设置模板目录 
$smarty->template_dir = "./templates";
//设置编译目录
$smarty->compile_dir = "./templates_c"; 
//左右边界符，默认为{}，但实际应用当中容易与JavaScript 
//相冲突，所以建议设成<{}>或其它。
$smarty->left_delimiter = "<{"; 
$smarty->right_delimiter = "}>"; 
//进行模板变量替换 
$smarty->assign("name", "某人名");
$smarty->display("index.tpl");
?>
