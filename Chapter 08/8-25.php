<html>
<!程序名称：8-25.html>
<!程序功能：显示留言内容。>

<head>
  <title>留言板</title>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

  <div align="center">
  <table width="90%" border="0">
  <tr valign="top">
  	<td height="395">
  	<p align= "center">留言簿:</p>
  	<p align="center">
<?php
	//打开文件
	$f =fopen("guestbook.dat","a++");
  //读取文件
  $msg= fread($f,filesize("guestbook.dat"));
  //关闭文件
  fclose($f);
  //显示留言
  echo "<center>$msg</center>";


?>
  </p>
  <div align="center">
  </div>
  <div align="center">
  </div>
  </td>
  </tr>
  </table>
  </div>
</body>

</html>