<html>
<!�������ƣ�7-7.php>
<!�����ܣ������ϴ��ļ���>

<head>
<title>�����ϴ��ļ�</title>
</head>
<body>
<?php
$uploadNeed = $_POST['uploadNeed'];
// ��ʼѭ��
for($x=0;$x<$uploadNeed;$x++){
$file_name = $_FILES['uploadFile'. $x]['name'];
// ȥ���ļ����е������ַ�
$file_name = stripslashes($file_name);
$file_name = str_replace("'","",$file_name);
$copy = copy($_FILES['uploadFile'. $x]['tmp_name'],$file_name);
// ����Ƿ��Ƴɹ�
if($copy){
echo "$file_name �ϴ��ɹ�<br />";
}else{
echo "$file_name �ϴ�ʧ��<br />";
}
} 
// ����ѭ��
?>
</body>
</html>