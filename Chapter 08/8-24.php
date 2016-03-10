<?php
//程序名称：8-24.php
//程序功能：处理提交来的数据。 

 if($name=="")
  //姓名不能为空
{
	echo "姓名不能为空";
}
	else
	if($email=="")
{
	//EMAIL不能为空
	echo "Email不能为空";
}
	else
	if($nairong=="")
	{
		//留言不能为空
		echo "留言内容不能为空";
	}
	else
	{
		//以可读写方式打开ly.txt文件用于存储留言,如果不存在新建一个
		$fp=fopen("guestbook.dat","a++");
		//写入日期
		$t=date(Y年m月d日);
		//写入留言内容
		$main= "姓名:<a href=\"mailto:$email\">
		$name</a>:($t)<br>留言: $nairong <br><hr>";
		//写入文件
		$write=fwrite($fp,$main);
		fclose($fp);
		echo "留言成功";
	}
?>
