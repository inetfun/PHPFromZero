<?php
//××××××××××××××××××××××××××××××××××××××××××××××
//名称：14-8.php
//功能：服务器验证程序。
//××××××××××××××××××××××××××××××××××××××××××××××

    /*数据库连接*/
    
    $conn=@mysql_connect("localhost","root","");
    mysql_query("SET NAMES UTF8");
    mysql_select_db("yz",$conn);
    
    //设置页面编码
    header("Content-type:text/html;charset=UTF-8");
    
    //查询数据库
    if(isset($_GET["username"])){
        $strsql="SELECT * FROM member WHERE username='".unescape($_GET["username"])."'";
        $result=mysql_query($strsql);
        $rows=@mysql_num_rows($result);
        mysql_close($conn);
        
        //判断是否有此记录
        if($rows){
            echo "已被注册!";
        }else{
            echo "此用户名未被注册!";
        }
    }else{
        echo "错误!";
    }
    
    /*PHP的unescape转换函数,用来转换Javascript用escape函数加密过的字符
    --此函数需要iconv函数库支持*/
    
    function unescape($str) {
        $str = rawurldecode($str);
        preg_match_all("/%u.{4}|&#x.{4};|&#\d+;|&#\d+?|.+/U",$str,$r);
        $ar = $r[0];
        foreach($ar as $k=>$v) {
            if(substr($v,0,2) == "%u")
                $ar[$k] = iconv("UCS-2","UTF-8",pack("H4",substr($v,-4)));
            elseif(substr($v,0,3) == "&#x")
                $ar[$k] = iconv("UCS-2","UTF-8",pack("H4",substr($v,3,-1)));
            elseif(substr($v,0,2) == "&#") {
                $ar[$k] = iconv("UCS-2","UTF-8",pack("n",preg_replace("/[^\d]/","",$v)));
            }
        }
        return join("",$ar);
    }    
?>

