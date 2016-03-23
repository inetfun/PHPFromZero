<html>
<!--程序名称:15-3.php-->
<!--程序功能：在一个字符串中查找另一个字符串-->

<head>
<title>在一个字符串中查找另一个字符串</title>
</head>
<body>
<a href="./">返回列表</a><br>
<form action="<?echo $PHP_SELF;?>" method="post">
在<input type="text" name="string" value="<?echo $string;?>">中查找<input type="text" name="query" value="<?echo $query;?>"><br>
<input type="radio" name="where" value="" <?if(!isset($where) or $where=="") echo "checked";?>>第二个字符串可以在第一个字符串的任何位置<br>
<input type="radio" name="where" value="^" <?if(isset($where) and $where=="^") echo "checked";?>>第一个字符串以第二个字符串开始<br>
<input type="radio" name="where" value="$" <?if(isset($where) and $where=="$") echo "checked";?>>第一个字符串以第二个字符串结束<br>
<input type="checkbox" name="case" value="case" <?if(isset($case)) echo "checked";?>>区分大小写<br>
<input type="submit" value="查询">
</form>
<?php
if(isset($string) and isset($query) and $string<>"" and $query<>""){
    if(isset($case)){
        $func = "ereg";
    }
    else{
        $func = "eregi";
    }
    switch($where){
        case "^":
            $query = "^" . $query;
            break;
        case "$":
            $query .= "$";
            break;
    }
    eval("\$found = $func(\"$query\",\"$string\");");
    if($found){
        echo "找到！";
    }
    else{
        echo "未找到！";
    }
}
?>
</body>
</html>
