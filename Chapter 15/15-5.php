<html>
<!--程序名称:15-5.php-->
<!--程序功能: 获得某页面中的所有连接地址程序-->

<head><title>获得某页面中的所有连接地址程序</title></head>
<body>
<a href="17-5.php">返回列表</a><br>
<form action="<?php echo $PHP_SELF;?>" method="post">
URL：<input type="text" name="url" value="<?echo $url?>"><input type="submit" value="获取所有裢接">
</form>
<?php
if(isset($url)){
echo "$url 有下列裢接：<br>";
$fcontents = file($url);
while(list(,$line)=each($fcontents)){
while(eregi('(href[[:space:]]*=[[:space:]]*"?[[:alnum:]:@/._-]+"?)(.*)',$line,$regs)){
$regs[1] = eregi_replace('(href[[:space:]]*=[[:space:]]*"?)([[:alnum:]:@/._-]+)("?)',"\\2",$regs[1]);
echo "    $regs[1]<br>";
$line = $regs[2];
}
}
}
?>
</body>
</html>
