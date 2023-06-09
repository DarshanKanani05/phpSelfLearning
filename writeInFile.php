<?php

// $fptr = fopen("myfile.txt", "w");
// fwrite($fptr, "Wow");
// fwrite($fptr, "Hello World!!!");

// fclose($fptr);

$fptr = fopen("myfile.txt", "a");
fwrite($fptr,"Nice Work Man!!!");
fclose($fptr);

?>