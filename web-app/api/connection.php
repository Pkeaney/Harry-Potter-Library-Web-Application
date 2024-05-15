<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "coursework";
$conn = mysqli_connect($server, $username, $password, $dbname);

if (! $conn) {
    echo "Database connection failed";
}
?>