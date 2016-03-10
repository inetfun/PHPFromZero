<html>
<!程序名称：7-7.php>
<!程序功能：处理上传文件。>

<head>
<title>处理上传文件</title>
</head>
<body>
<?php
$uploadNeed = $_POST['uploadNeed'];
// 开始循环
for($x=0;$x<$uploadNeed;$x++){
$file_name = $_FILES['uploadFile'. $x]['name'];
// 去除文件名中的特殊字符
$file_name = stripslashes($file_name);
$file_name = str_replace("'","",$file_name);
$copy = copy($_FILES['uploadFile'. $x]['tmp_name'],$file_name);
// 检查是否复制成功
if($copy){
echo "$file_name 上传成功<br />";
}else{
echo "$file_name 上传失败<br />";
}
} 
// 结束循环
?>
</body>
</html>