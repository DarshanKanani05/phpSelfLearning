<?php
$str = "Hello World!!!";

echo $str;
echo "<br>";

echo strlen($str);
echo "<br>";

echo str_word_count($str);
echo "<br>";

echo strrev($str);
echo "<br>";

echo strpos($str, "World");
echo "<br>";

echo str_replace("World!!!", "Darshan!!!", $str);
echo "<br>";

echo str_repeat($str, 5);
echo "<br>";

echo "<pre>";
echo rtrim("    $str    ");
echo "<br>";
echo ltrim("    $str    ");
echo "<br>";
echo "</pre>";

?>