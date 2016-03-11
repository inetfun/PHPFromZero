<?php 
//****************************************************
//名称：13-5.php
//功能：重载在PHP中的使用程序.
//****************************************************
class Myclass { 
function Myclass() { 
$name="Myclass".func_num_args(); 
$this->$name(); 
//注意$this->name()一般是错误的，但是在这里$name是一个将被调用方法的名字 
} 
function Myclass1($x) { 
code; 
} 
function Myclass2($x,$y) { 
code; 
} 
} 
    ?>
