<html>
<!程序名称：5-6.php>
<!程序功能：运算符赋值的使用。>

<head>
	<title>运算符赋值的使用</title>
</head>
<body>
<?php
$a = 5;
echo "\$a=$a";
echo"<br>";
$c=$a+2;
$a += 2;    // 即 $a = $a + 2;
$b = "哇";
$b .= "哈";   // $b = "哇哈";
$b .= "哈";   // $b = "哇哈哈";
$d=4;
echo "\$d=$d";
echo"<br>";
$f=$d*2;
$d*=2;
$e=8;
echo "\$e=$e";
echo"<br>";
$g=$e/2;
$e /=2;
echo "\$a+=$a";
echo"<br>";
echo "\$a+2=$c";
echo"<br>";
echo"\$b.=$b";
echo"<br>";
echo"\$d*2=$f";
echo"<br>";
echo"\$d*=$d";
echo"<br>";
echo"\$e/2=$g";
echo"<br>";
echo"\$e/=$e";
echo"<br>";
?>
	</body>
	</html>