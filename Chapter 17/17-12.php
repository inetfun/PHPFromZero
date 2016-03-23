<?php
  /**********************************/
  /*    名称：17-12.php     */
  /*    功能：管理员回复留言处理    */
  /**********************************/

  require_once '17-4.php';
  //如果不是管理，则退出
  if(!$_SESSION['isAdmin'])
  {
      ?>
      <!--弹出信息对话框-->
      <script>
         alert("你不是管理员，请退出该页。");
         location.href="17-6.php";
      </script>
      <?php
      exit;
  }
  $sql = "UPDATE guestbook SET revort = '$_POST[revort]', retime = NOW()
         WHERE id = $_POST[id]";
  $result = mysql_query($sql);
  //判断记录是否被更新
  $num = mysql_affected_rows($db);
  if($num>0)
      $errmsg = "留言回复成功!";
  else
      $errmsg = "留言回复失败!";
  ?>
     <!--弹出信息对话框-->
      <script>
         alert("<?php echo $errmsg ?>");
         location.href="17-6.php";
      </script>
   <?php
   exit;
?>
