<html>
<!�������ƣ�8-25.html>
<!�����ܣ���ʾ�������ݡ�>

<head>
  <title>���԰�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

  <div align="center">
  <table width="90%" border="0">
  <tr valign="top">
  	<td height="395">
  	<p align= "center">���Բ�:</p>
  	<p align="center">
<?php
	//���ļ�
	$f =fopen("guestbook.dat","a++");
  //��ȡ�ļ�
  $msg= fread($f,filesize("guestbook.dat"));
  //�ر��ļ�
  fclose($f);
  //��ʾ����
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