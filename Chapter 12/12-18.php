<html>
<!程序名称：12-18.php>
<!程序功能：修改学生信息程序。>

<head>
	  <title>修改学生信息程序</title>
</head>
<body bgcolor="#ffffff" text="#000000">
<?php
$mysqluser="root";
$mysqlpass="123456";
$dbname="mydb";
$tablename="user";
$limit="5";
mysql_connect('localhost',$mysqluser,$mysqlpass);
mysql_select_db($dbname);
mysql_query("set names 'gb2312'");
if($action=="edit")
		{
		 	mysql_query("UPDATE `user` SET name='$uname',age='$uage',phone='$uphone',address='$uaddress',education='$ueducation'where id=$uid");

		 	print "学生信息改。";
		}
else if($action=="view")
	   {
	   		$get=mysql_fetch_row(mysql_query("select * from $tablename where
	   		ID='$id'"));
	   		echo $get;
	   ?>
	   <form action="14-34.php"method="post">
	   <input type="hidden" name="action" value="edit">
        	<input type="hidden" name="id" value="<?php echo $record->id?>">
        	姓名:<input type="text" name="name" size="20" value="<?php echo "$get[1]"; ?>"><br>
            年龄:<input type="text" name="age" size="20" value="
            <?php echo "$get[2]"; ?>"><br>
            电话:<input type="text" name="phone" size="20" value="
            <?php echo "$get[3]"; ?>"><br>
            地址:<input type="text" name="address" size="20" value="
            <?php echo $record->address ?>"><br>
            年级:<input type="text" name="education" size="20" value="
            <?php echo "$get[4]"; ?>">
            <br>
            <input type="submit" value="修改"  name="edit"><br>
            </form>
	   <?php
	   }
	   else
	   {
	   ?>
	   <form action="14-34.php"method="post">
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
		<input type="submit" value="修改">
		<?php
	   }
	   ?>
	   </center>
	   </body>
	   </html>