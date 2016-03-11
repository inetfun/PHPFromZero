<?php 
//*****************************************************************
//名称：13-3.php
//功能：创建构造函数与类同名的方法
//****************************************************************

class Something { 
var $x; 
function Something($y) { 
$this->x=$y; 
} 
function setX($v) { 
$this->x=$v; 
} 
function getX() { 
return $this->x; 
} 
} 
?>
