<html>
<!�������ƣ�18-3.php>
<!�����ܣ�ɾ�����š�>

<head>
	  <title>ɾ������</title>
</head>
<body bgcolor="#ffffff" text="#000000">
<?php
$mysqluser="root";
$mysqlpass="123456";
$dbname="news";
$tablename="tnews";
$limit="5";
mysql_connect('localhost',$mysqluser,$mysqlpass);
mysql_select_db($dbname);
mysql_query("set names 'gb2312'");
if($action=="delete")
	{
	 	mysql_query("DELETE FROM $tablename WHERE id ='$id'");
	 	print"��������Ѿ���ɾ����";
	}
else
	{
	 	$script=getenv("SCRIPT_NAME");
?>
<form action="18-3.php" method="post">
<input type="hidden" name="action" value="delete">
<select name="id" size=5>
<?php
$get =mysql_query("select * from $tablename");
	   		while ($stuff=mysql_fetch_array($get))
	{
	 	  print "<option value=\"$stuff[0]\">$stuff[1]\n";
	}
?>
</select>
<input type="submit" value="ɾ��">
<?php
}
?>
<table align=center border=0 width=776>
<tbody>
<tr>
	<td align=middle>
	<br>
	<br>
	<hr size="0" width="80%">
	</td>
</tr>
<tr align="center">
</tr>
</tbody>
</table>
</body>
</html>