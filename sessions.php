<?php

session_start();
$_SESSION['username'] = "Darshan";
$_SESSION['favCat'] = "Books";

echo "We Have Saved Your Session!!!";

?>