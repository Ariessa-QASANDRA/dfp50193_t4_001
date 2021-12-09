<?php
$myfile = fopen("text1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("text1.txt"));
fclose($myfile);
?>