<html>
<!--��������12-20.php
<!--������: ��������ѯ����ķ�ҳ��ʾ

<head>
<title>��ѯ����ķ�ҳ��ʾ</title>
</head>
<body>
<?
    $pagesize = 2;//ÿҳ��ʾ2����¼

    $server = mysql_pconnect("localhost","root","123456");
    $db = mysql_select_db("mydb");
    mysql_query("set names 'gb2312'");
      //���ɲ�ѯ��¼����SQL���
    $sql = "select count(*) as total from user";
        //��ѯ��¼��
    $rst = mysql_query($sql);
       //ȡ��һ����¼
    $row = mysql_fetch_array($rst);
      //ȡ����¼��
    $rowcount = $row["total"];
      //�ͷ�result��Դ
    mysql_free_result($rst);
     //����ܹ��м�ҳ
    $pagecount = bcdiv($rowcount+$pagesize-1,$pagesize,0);
     //��û������pagenoʱ��ȱʡΪ��ʾ��1ҳ
    if(!isset($pageno)) $pageno = 1;
     //��pageno��1С�����������Ϊ1
    if($pageno<1) $pageno = 1;
      //��pageno���ܹ���ҳ�������������Ϊ���һҳ
    if($pageno>$pagecount) $pageno = $pagecount;
	if($pageno>0){
     //��$PHP_SELFת��Ϊ������URL��ʹ�õ��ַ����������Ļ��Ϳ��Դ�������Ŀ¼�������ļ���
       $href = eregi_replace("%2f","/",urlencode($PHP_SELF));
       if($pageno>1){//��ʾ��һҳ���ͽ�
          echo '<a href="aa.php' . $href . '?pageno=' . ($pageno-1) . '">��һҳ</a>  ';
       }
       else{
          echo '��һҳ  ';
       }
       for($i=1;$i<$pageno;$i++){
          echo '<a href="aa.php' . $href . '?pageno=' . $i . '">' . $i . '</a>  ';
       }
       echo $pageno . '  ';
       for($i++;$i<=$pagecount;$i++){
          echo '<a href="aa.php' . $href . '?pageno=' . $i . '">' . $i . '</a>  ';
       }
       if($pageno<$pagecount){//��ʾ��һҳ���ͽ�
          echo '<a href="aa.php' . $href . '?pageno=' . ($pageno+1) . '">��һҳ</a>  ';
       }
       else{
          echo '��һҳ  ';
       }
         //�����ҳ��һ����¼���������е�λ��(��һ����¼Ϊ0)
       $offset = ($pageno-1) * $pagesize;
         //���ɲ�ѯ��ҳ���ݵ�SQL���
       $sql = "select * from user LIMIT $offset,$pagesize";
         //��ѯ��ҳ����
       $rst = mysql_query($sql);
           //ȡ���ֶ�����
       $num_fields = mysql_num_fields($rst);
       $i = 0;
       while($i<$num_fields){
       	//ȡ�������ֶε�����
          $fields[$i] = mysql_field_name($rst,$i);//ȡ�õ�i+1���ֶε�����
          $i++;
       }
       echo '<table border="1" cellspacing="0" cellpadding="0">';
       //��ʼ������
       echo '<tr>';
       reset($fields);
       while(list(,$field_name)=each($fields)){
       	//��ʾ�ֶ�����
          echo "<th>$field_name</th>";
       }
       echo '</tr>';
       while($row=mysql_fetch_array($rst)){
       	//��ʾ��ҳ����
          echo '<tr>';
          reset($fields);
          while(list(,$field_name)=each($fields)){
          	//��ʾÿ���ֶε�ֵ
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
       //����������
       mysql_free_result($rst) or die("�޷��ͷ�result��Դ��");//�ͷ�result��Դ
    }
    else{
       echo "Ŀǰ�ñ���û���κ����ݣ�";
    }
	//�Ͽ����Ӳ��ͷ���Դ
    mysql_close($server);
    ?>
</body>
</html>
