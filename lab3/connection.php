<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "news";

$mydb = new mysqli($servername, $username, $password, $dbName);
if ($mydb->connect_error) {
    die('Connection Failed');
}
// echo "Connection Successfully";

// $sql = "SELECT * FROM tblproduct";
// $products = $thducngu->query($sql);