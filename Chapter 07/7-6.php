<html>
<!�������ƣ�7-6.php>
<!�����ܣ�ʵ���ϴ��Ĵ��ڡ�>

<head>
<title>ʵ���ϴ��Ĵ���</title>
</head>
<body>
<form name="form1" enctype="multipart/form-data" method="post" action="7-7.php">
<?php
// ������̬��
$uploadNeed = $_POST['uploadNeed'];
for($x=0;$x<$uploadNeed;$x++){
?>
<input name="uploadFile<?php echo $x;?>" type="file" id="uploadFile<?php echo $x;?>">
<?php
// ���ѭ��
}
?>
<input name="uploadNeed" type="hidden" value="<?php echo $uploadNeed;?>">
<input type="submit" name="Submit" value="�ϴ�">
</form>
</body>
</html>