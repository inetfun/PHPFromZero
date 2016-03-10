<html>
<!程序名称：7-4.php>
<!程序功能：变量函数的使用。>

<head>
	<title>变量函数的使用</title>
</head>
<body>
 <?php
function a()
{
    echo "In a()<br>\n";
}
function b($arg = '')
{
    echo "In b(); argument was '$arg'.<br>\n";
}
function c($string)
{
    echo $string;
}
$func = 'a';
$func();        
$func = 'b';
$func('test');  
$func = 'c';
$func('test');  
?> 
	</body>
	</html>