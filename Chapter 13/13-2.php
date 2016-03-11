<?php 
//***************************************************************
//名称：13-2.php
//功能：类的继承。
//***************************************************************

class Another extends Something { 
var $y; 
function setY($v) { 
$this->y=$v; 
} 
function getY() { 
return $this->y; 
} 
} 
?>