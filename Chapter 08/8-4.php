<html>
<!程序名称：8-4.php>
<!程序功能：字符串的查找函数的使用。>

<head>
	<title>字符串的查找函数的使用</title>
</head>
<body>
 <?php	
 		$str="abcdeabcde";
 		//输出0。 
 		echo strpos($str,"ab");
 		echo"<br>";
 		//取最后一次出现的位置，输出5。 
 		echo strrpos($str,"ab");
 		echo"<br>";
 		//取首字符， 
 		echo strrpos($str,"ac");
 		echo"<br>";
 		//97为字母a 的ASCII码， 
 		echo strpos($str,97);
 		echo"<br>";
 		//从第2个字符开始找， 
 		echo strpos($str,"ab",1);
 		echo"<br>";
 		//没找到，返回空。 
 		echo strpos($str,"ba");
 		echo"<br>";
 		//$var为空，所以输出1。 
 		echo empty($var);
?>	
<h1>	  
	</body>
	</html>