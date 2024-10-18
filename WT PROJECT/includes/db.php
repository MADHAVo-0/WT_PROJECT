<?php
// db.php
$server = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "shopease_db";

$shop_conn = new mysqli($server, $username, $password, $dbname);

if ($shop_conn->connect_error) {
    die("Connection failed: " . $shop_conn->connect_error);
}

$cred_conn = new mysqli($server, $username, $password, 'credentials');

if ($cred_conn->connect_error) {
    die("Connection failed: " . $cred_conn->connect_error);
}
?>
