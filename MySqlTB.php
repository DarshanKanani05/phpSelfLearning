<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="mysqldb";

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "Connection Was Done!!!<br>";
}

$sql="CREATE TABLE `employees` (`eno` INT NOT NULL AUTO_INCREMENT , `ename` VARCHAR(30) NOT NULL , `role` VARCHAR(30) NOT NULL , `doj` DATE NOT NULL , PRIMARY KEY (`eno`));";

$result=mysqli_query($conn,$sql);

if($result){
    echo "The Table was created successfully!!!";
}
else{
    echo "The Table was not created successfully!!! The Error is ".mysqli_error($conn);
}


?>