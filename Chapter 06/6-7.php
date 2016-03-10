<html>
<!--程序名称：6-6.php-->
<!--程序功能：do...while是如何工作--> 

<!--本程序是do...while在HTML中的嵌套--> 
<head>
	  <title>do...while循环</title>
</head>
<body>
<?php
	 //初始化变量 
	 $a=1;
	 do
//大括号中是指定操作的语句 
{
 	//输出变量的值 
 	 echo $a;
 	 //下面是一个换行符 
 	 echo "<br>";
 	 $a++;
 	 //条件判断语句 
}while($a<=10)
?> 
</body>
<html>