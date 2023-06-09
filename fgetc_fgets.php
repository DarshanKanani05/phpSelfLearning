<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo "<br>";
// echo fgetc($fptr);

// while ($a = fgets($fptr)) {
//     echo $a;
//     echo "<br>";
// }

while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == ".") {
        break;
    }
}

fclose($fptr);

?>