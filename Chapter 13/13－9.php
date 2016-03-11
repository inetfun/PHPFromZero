<?php 
//*********************************************************************
//名称：13-9.php
//功能：调用模板程序
//*********************************************************************
//处理好变量的值
mydate=date("Y年m月d日"); 
//调入将模板程序模块
include("template.inc"); 
mytemp = new Template("/你的模板文件所在目录/"); 
//创建一个模板实例mytemp，如果模板就在当前目录，那么使用"."就可以 
mytemp->set_file("MyFileHandle","MyTemplate.html"); 
//设置MyFileHandle文件句柄指向我们所要调用的模板文件Mytemplate.html 
mytemp->set_var("today", mydate); 
//调用模板的set_var方法，设置模板中的变量today值为$mydate 
mytemp->parse("MyOutput","MyFileHandle"); 
//调用模板的parse方法，对MyFileHandle文件句柄所指向的模板文件进行分析，
//替换其中相应变量 
//并把替换结果即完整的HTML文件内容保存在字串变量MyOutput中 
mytemp->p("MyOutput"); 
// 打印输出结果字串变量MyOutput的值 
?> 
