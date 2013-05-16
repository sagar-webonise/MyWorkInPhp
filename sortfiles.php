<!--Programe is for sorting the file names in the directory-->
<?php
$path = "/home/webonise/mp3" ; // give here the path of folder

$dir = opendir($path);
$files = array();
while($files[]=readdir($dir));
sort($files);
closedir($dir);
foreach ($files as $file) {

    //MANIPULATE FILENAME HERE, YOU HAVE $file...

    if ($file <> "." && $file <> ".." && !preg_match("/^hide/i",$file))
        echo $file;
}
?>