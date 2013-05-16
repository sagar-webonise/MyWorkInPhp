<?php

$str = '<a href="http://www.google.com" target="_blank" id="test">';
$isUrl =  preg_match('/http[A-Za-z0-9._-\s\/\/:]+/',$str,$match);
$url = "";
if($isUrl){
   $url = $match[0];
}
print $url;
if(!empty($url)){
echo "replaced string is => \n";
print preg_replace('/[A-Za-z0-9._-\s\<>:\/\/"=]+href=[A-Za-z0-9._-\s\"<>:\/\/=]+/',$url,$str)."\n";
print "or we can replace the whole string directlys as \n";
$str = $url;
print $str."\n";

}else{
    echo "sorry invalid string";
}
?>