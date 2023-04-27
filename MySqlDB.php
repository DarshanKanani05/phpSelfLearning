<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "Connection Was Done!!!<br>";
}

$sql = "CREATE DATABASE MySqlDB";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The db was created successfully!!!";
}
else{
    echo "The db was not created successfully!!! The Error is ".mysqli_error($conn);
}

?>