<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "Done<br>";
}


$sql = "DELETE FROM `contactus` WHERE `sno` = 6";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "Number Of Affected Row : " . $aff . "<br>";

if ($result) {
    echo "Deleted Successfully!!!<br>";
} else {
    $err = mysqli_error($conn);
    echo "Not Deleted Due To This Error : " . $err . "<br>";
}

?>