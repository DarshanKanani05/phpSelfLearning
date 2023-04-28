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

$sql = "SELECT * FROM `contactus` WHERE `name`='Arin'";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num . " Record Found!!!";
$no = 1;

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $no . ". Name : " . $row['name'] . " Email : " . $row['email'] . " Concern : " . $row['concern'] . " Time : " . $row['dt'];
        echo "<br>";
        $no = $no + 1;
    }
}

$sql = "UPDATE `contactus` SET `email` = 'janvi@gmail.com' WHERE `sno` = 2;";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Update Successfully!!!";
} else {
    echo "Update Failed!!!";
}

?>