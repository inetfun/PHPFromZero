<html>
<!程序名称：18-4.php>
<!程序功能：浏览新闻。>

<head>
	<title>浏览新闻</title>
</head>
<body bgcolor="#ffffff" text="#000000">
<tbody>
<center>
<?php
	$mysqluser="root";
	$mysqlpass="123456";
	$dbname="news";
	$tablename="tnews";
	mysql_connect('localhost',$mysqluser,$mysqlpass);
	mysql_select_db($dbname);
	mysql_query("set names 'gb2312'");
	if($id=="")
	{
	 		   if(mysql_num_rows(mysql_query("select * from $tablename"))!=0)
	 		   {
					$get=mysql_query("select * from $tablename order by id desc");
					while($stuff=mysql_fetch_array($get))
					{
					 	print "<a href=\"20-4.php?id=$stuff[0]\" target=\"_blank\">
						 <b>$stuff[1]</b><br></a>";
					}
				}
				else
				{
				 	echo"现在没有新闻";
				}
	}
	else
	{
	 	$getnews=mysql_query("select * from $tablename where id=$id");
	 	$result=mysql_fetch_array($getnews);
	 	echo"<h1>$result[1]</h1>";
	 	echo "$result[2]<br>\n";
	}
	?>
	</center>
	<tbody>
</body>
</html>