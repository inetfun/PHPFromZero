<html>
<!--程序名称:15-6.php-->
<!--程序功能: 检测邮件地址的真实性-->

<head>
  <title>检测邮件地址的真实性</title>
</head>
<body>
<?php
$email=$_POST['email'];
if(check_email_address($email)==1){
	echo "正确";
} else {
	echo "错误";
}
function check_email_address($email) {
// 检测用户输入的邮箱是否合法
if (!ereg("[^@]{1,64}@[^@]{1,255}", $email)) {
return false;
}
$email_array = explode("@", $email);
$local_array = explode(".", $email_array[0]);
for ($i = 0; $i < sizeof($local_array); $i++) {
if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
return false;
}
}
if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
$domain_array = explode(".", $email_array[1]);
if (sizeof($domain_array) < 2) {
return false; // Not enough parts to domain
}
for ($i = 0; $i < sizeof($domain_array); $i++) {
if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
return false;
}

}
}
return true;
}
?>
<!--提交邮箱地址表单-->
<form action="" method="post">
<input name="email" type="text"><br>
<input name="" type="submit" value="验证">
</form>
</body>
<html>
