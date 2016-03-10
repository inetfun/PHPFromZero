<html>
<!程序名称：7-8.php>
<!程序功能：类的定义。>

<head>
	<title>类的定义</title>
</head>
<body>
 <?php
 	  class Point
 	  {
 	  //点的x坐标. 
	   var $x;
	   //点的y坐标. 
	   var $y;
	   //设置x坐标. 
	   function setx($px=0)
	   {
	   			$this->x=$px;
	   }
	   //设置y坐标. 
	   function sety($py=0)
	   {
	   			$this->y=$py;
	   }
	   //获取x的坐标值. 
	   function getx()
	   {
	   			return $this->x;
	   }
	   //获取Y的坐标值. 
	   function gety()
	   {
	   			return $this->y; 
	   }
	   }
?> 
	</body>
	</html>