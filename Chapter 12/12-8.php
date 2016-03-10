<html>
<!--程序名称:12-7.ph8-->
<!--程序功能:释放内存函数的使用.-->

<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	  <title>释放内存函数的使用</title>
</head>
<body>
	  <?php
	  $mysqluser="root";
	  $mysqlpass="123456";
	  $dbname="news";
	  $tablename="tnews";
	  $limit="5";
	 $connect=mysql_connect("localhost",$mysqluser,$mysqlpass);

	 mysql_select_db("$dbname");
	 mysql_query("set names 'gb2312'");
	if($id=="")
	{
	 		   if(mysql_num_rows(mysql_query("select * from $tablename"))!=0)
	 		   {
					$get=mysql_query("select * from $tablename order by id desc");
					while($stuff=mysql_fetch_array($get))
					{
					 	print "<a href=\"14-8.php?id=$stuff[0]\" target=\"_blank\">
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
		</body>
		</html>