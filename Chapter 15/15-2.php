<html>
<!--程序名称15-2.php-->
<!--程序功能: 用正则表达式检查输入的数字是否是合法的数字-->

<head>
<title>用正则表达式检查输入的数字是否是合法的数字</title>
</head>
<body>
<?php
$in="2344";
if(ereg("^(-{0,1}|\+{0,1})[0-5]+(\.{0,1}[0-5]+)$",$in))
echo "Ok!";
else
echo "Sorry,Please input again!";
?>
<br>比较简单的吧！
</body>
</html>
