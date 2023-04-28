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

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num;

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        // echo var_dump($row);
        echo $row['sno'] . ". Name : " . $row['name'] . " Email : " . $row['email'] . " Concern : " . $row['concern'] . " Time : " . $row['dt'];
    }
}

?>