<html>
<!--程序名称:15-4.php-->
<!--程序功能:正则表达式判断Email和URL-->

<head>
  <title>正则表达式判断email和URL</title>
</head>
<<body  onload="f.a.select();">
<?php
echo 'a:'.htmlspecialchars($a);
echo '<br>a1:';
$a1 = eregi_replace('(^[_.][:alnum:]-]+@([[:alnum:]][[:alnum:]-]*.)
+[[:alpha:]]{2,3}$)',' <a href="mailto:\1">\1</a> ', $a) ;
echo htmlspecialchars($a1);
echo "<br>a1:$a1";
echo '<br>a2:';
$a2 = eregi_replace('([[:alnum:]]+://([[:alnum:]][[:alnum:]-]*\.)
+[[:alpha:]]{2,3}([#\?/\\][^#\?/\\][:space:]][^[:space:]]*)?)',
      '<a href="\1" target="_blank">\1</a>', $a);
echo htmlspecialchars($a2);
echo "<br>a2:$a2";
?>
<form name="f">
<input  name="a" value="<?php echo $a; ?>">
<input type="submit" >
</form>
</body>
</html>
