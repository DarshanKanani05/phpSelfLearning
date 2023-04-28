<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mysqldb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "Connection Was Done!!!<br>";
}

$ename = "Arin";
$role = "Intern";
$doj = "2023-04-11";

$sql = "INSERT INTO `employees` (`ename`, `role`, `doj`) VALUES ('$ename', '$role', '$doj');";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The Record has been inserted successfully!!!";
} else {
    echo "The Record was not inserted successfully!!! The Error is " . mysqli_error($conn);
}
?>