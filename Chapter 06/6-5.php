<?php
//程序名称：6-5.php
//程序功能：通过switch显示周几
 
 //当前星期作为判断条件
switch (date("D"))
{
 	//星期一的情况
 	case "Mon":
	 	 echo "星期一";
	 	  	  break;
	//星期二的情况
	case "Tue":
	 	 echo "星期二";
	 	  	  break;
	//星期三的情况
	case "Wed":
	 	 echo "星期三";
	 	  	  break;
 	//星期四的情况
 	case "Thu":
 	  	 echo "星期四";
 		 	  break;
 	//星期五的情况
 	case "Fri":
 		 echo "星期五";
 		 	  break;
 	//除以上之外的其他情况
 	default:
  		echo "过周末";
  			 break;
}
?> 
 
 