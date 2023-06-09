<?php

$fptr = fopen("myfile.txt", "r");
// echo $fptr;

if (!$fptr) {
    die("Unable To Open File!!!");
}

$content = fread($fptr, filesize("myfile.txt"));
echo $content;

fclose($fptr);

?>