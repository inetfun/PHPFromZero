<html>
<!�������ƣ�7-4.php>
<!�����ܣ�����������ʹ�á�>

<head>
	<title>����������ʹ��</title>
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