<html>
<!�������ƣ�7-9.php>
<!�����ܣ�����Ĵ�����>

<head>
	<title>����Ĵ���</title>
</head>
<body>
 <?php
 	  class Point
 	  {
 	  //���x����. 
	   var $x;
	   //���y����. 
	   var $y;
	   //����x����. 
	   function setx($px=0)
	   {
	   			$this->x=$px;
	   }
	   //����y����. 
	   function sety($py=0)
	   {
	   			$this->y=$py;
	   }
	   //��ȡx������ֵ. 
	   function getx()
	   {
	   			return $this->x;
	   }
	   //��ȡY������ֵ. 
	   function gety()
	   {
	   			return $this->y; 
	   }
	   }
	   $myPoint = new Point;
	   $myPoint->setx(10);
	   $myPoint->sety(10);
?> 
	</body>
	</html>