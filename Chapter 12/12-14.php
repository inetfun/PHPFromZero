<html>
<!�������ƣ�12-14.php>
<!�����ܣ��������ݱ��еļ�¼����>

<head>
	  <title>�������ݱ��еļ�¼����</title>
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
if($action=="edit")
		{
		 	mysql_query("update $tablename set title='$title' where id='$id'");
		 	mysql_query("update $tablename set text='$text' where id='$id'");
		 	print "��ļ�¼�Ѿ��޸�";
		}
else if($action=="view")
	   {
	   		$get=mysql_fetch_row(mysql_query("select * from $tablename where
	   		ID='$id'"));
	   ?>
	   <form action="14-14.php"method="post">
	   <input type="hidden" name="action" value="edit">
	   <input type="hidden" name="id"value="<?php echo "$get[0]"; ?>">
	   ���⣺<br>
	   <input type="text" name="title"size=50 value="<?php echo "$get[1]"; ?>">
	   <br><br>
	   ���ݣ�<br>
	   <textarea rows=5 cols=50 name="text"><?php echo "$get[2]"; ?>
	   </textarea>
	   <input type="submit"value="�༭">
	   <?php
	   }
	   else
	   {
	   ?>
	   <form action="14-14.php"method="post">
	   <input type="hidden"name="action"value="view">
	   <select name="id"size=5>
	   <?php
	   $get =mysql_query("select * from $tablename");
	   		while ($stuff=mysql_fetch_array($get))
	   		{
			 	  print"<option value=\"$stuff[0]\">$stuff[1]\n";
			}
		?>
		</select>
		<input type="submit" value="�޸�">
		<?php
	   }
	   ?>
	   </center>
	   </body>
	   </html>