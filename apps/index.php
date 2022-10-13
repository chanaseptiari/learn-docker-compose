<?php
echo 'My username is ' . $_ENV["USER"] . '!';
echo '<br>ini sebuah testing ';

$hostname = $_ENV["MARIADB_HOST"];
$username = $_ENV["MARIADB_USER"];
$password = $_ENV["MARIADB_PASSWORD"];

echo "$hostname, $username, $password";
// Create connection
$conn = mysqli_connect($hostname, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
