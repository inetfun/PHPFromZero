<html>
<!--程序名称12-20.php
<!--程序功能: 用正则表查询结果的分页显示

<head>
<title>查询结果的分页显示</title>
</head>
<body>
<?
    $pagesize = 2;//每页显示2条记录

    $server = mysql_pconnect("localhost","root","123456");
    $db = mysql_select_db("mydb");
    mysql_query("set names 'gb2312'");
      //生成查询记录数的SQL语句
    $sql = "select count(*) as total from user";
        //查询记录数
    $rst = mysql_query($sql);
       //取出一条记录
    $row = mysql_fetch_array($rst);
      //取出记录数
    $rowcount = $row["total"];
      //释放result资源
    mysql_free_result($rst);
     //算出总共有几页
    $pagecount = bcdiv($rowcount+$pagesize-1,$pagesize,0);
     //在没有设置pageno时，缺省为显示第1页
    if(!isset($pageno)) $pageno = 1;
     //若pageno比1小，则把它设置为1
    if($pageno<1) $pageno = 1;
      //若pageno比总共的页数大，则把它设置为最后一页
    if($pageno>$pagecount) $pageno = $pagecount;
	if($pageno>0){
     //把$PHP_SELF转换为可以在URL上使用的字符串，这样的话就可以处理中文目录或中文文件名
       $href = eregi_replace("%2f","/",urlencode($PHP_SELF));
       if($pageno>1){//显示上一页的裢接
          echo '<a href="aa.php' . $href . '?pageno=' . ($pageno-1) . '">上一页</a>  ';
       }
       else{
          echo '上一页  ';
       }
       for($i=1;$i<$pageno;$i++){
          echo '<a href="aa.php' . $href . '?pageno=' . $i . '">' . $i . '</a>  ';
       }
       echo $pageno . '  ';
       for($i++;$i<=$pagecount;$i++){
          echo '<a href="aa.php' . $href . '?pageno=' . $i . '">' . $i . '</a>  ';
       }
       if($pageno<$pagecount){//显示下一页的裢接
          echo '<a href="aa.php' . $href . '?pageno=' . ($pageno+1) . '">下一页</a>  ';
       }
       else{
          echo '下一页  ';
       }
         //算出本页第一条记录在整个表中的位置(第一条记录为0)
       $offset = ($pageno-1) * $pagesize;
         //生成查询本页数据的SQL语句
       $sql = "select * from user LIMIT $offset,$pagesize";
         //查询本页数据
       $rst = mysql_query($sql);
           //取得字段总数
       $num_fields = mysql_num_fields($rst);
       $i = 0;
       while($i<$num_fields){
       	//取得所有字段的名字
          $fields[$i] = mysql_field_name($rst,$i);//取得第i+1个字段的名字
          $i++;
       }
       echo '<table border="1" cellspacing="0" cellpadding="0">';
       //开始输出表格
       echo '<tr>';
       reset($fields);
       while(list(,$field_name)=each($fields)){
       	//显示字段名称
          echo "<th>$field_name</th>";
       }
       echo '</tr>';
       while($row=mysql_fetch_array($rst)){
       	//显示本页数据
          echo '<tr>';
          reset($fields);
          while(list(,$field_name)=each($fields)){
          	//显示每个字段的值
             $field_value = $row[$field_name];
             if($field_value==""){
                echo '<td> </td>';
             }
             else{
                echo "<td>$field_value</td>";
             }
          }
          echo '</tr>';
       }
       echo '</table>';
       //表格输出结束
       mysql_free_result($rst) or die("无法释放result资源！");//释放result资源
    }
    else{
       echo "目前该表中没有任何数据！";
    }
	//断开连接并释放资源
    mysql_close($server);
    ?>
</body>
</html>
