<html>
<!程序名称：7-6.php>
<!程序功能：实现上传的窗口。>

<head>
<title>实现上传的窗口</title>
</head>
<body>
<form name="form1" enctype="multipart/form-data" method="post" action="7-7.php">
<?php
// 创建动态表单
$uploadNeed = $_POST['uploadNeed'];
for($x=0;$x<$uploadNeed;$x++){
?>
<input name="uploadFile<?php echo $x;?>" type="file" id="uploadFile<?php echo $x;?>">
<?php
// 完成循环
}
?>
<input name="uploadNeed" type="hidden" value="<?php echo $uploadNeed;?>">
<input type="submit" name="Submit" value="上传">
</form>
</body>
</html>