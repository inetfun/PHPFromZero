<?php 
//******************************************************
//名称：13-6.php
//功能：多态在php中的应用
//******************************************************

function niceDrawing($x) { 
//假设这是Board类的一个方法 
$x->draw(); 
} 
$obj=new Circle(3,187); 
$obj2=new Rectangle(4,5); 
$board->niceDrawing($obj); 

//将调用Circle的draw方法 

$board->niceDrawing($obj2); 
?>
