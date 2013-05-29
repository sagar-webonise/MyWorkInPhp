<?php 
$a = "123";
echo 1+$a;
?>
======================
<?php 
$str = "hello@yo\npmail1.com";
echo strstr($str,10);

?>

<?php 
$main = array(1,2,3,4);
$replace = array(5,6);
$subject = array(1,2);
print_r(str_replace($main,$replace,$subject));
?>

<?php 
$str = "hello This is nice function";
$tok = strtok($str," ");
print $tok;
while($tok){
   $tok = strtok(" ");
   print "\n".$tok;
}?>


<?php 
$str = "abcde";
$substr = "ab";
echo substr_compare($str,$substr,0,2);

?>
