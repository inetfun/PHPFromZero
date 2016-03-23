<html>
<!--程序名称:15-1.php-->
<!--程序功能:一个简单的正则表达式.-->

<head>
<meta http-equiv="Content-Language" content="zh-cn"> 
<meta http-equiv="Content-Type" content="text/html; charset=zh-utf-8"> 
	  <title>一个简单的正则表达式</title>
</head>
<body>
<?php
// 分隔符可以是斜线，点，或横线
$date = "05/05/2008";
list($month, $day, $year) = split ('[/.-]', $date); 
echo "Month: $month; Day: $day; Year: $year<br />\n";
?>
		</body>
		</html>
