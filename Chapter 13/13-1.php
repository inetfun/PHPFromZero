<?php 
//**************************************************************************
//名称：13-1.php
//功能：定义一个类实例
//**************************************************************************
class Something { 
// 在OOP类中，通常第一个字符为大写 
var $x; 
function setX($v) { 
// 方法开始为小写单词，然后使用大写字母来分隔单词，例如getValueOfArea() 
$this->x=$v; 
} 
function getX() { 
return $this->x; 
} 
} 
?>
