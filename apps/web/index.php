<?php
echo 'Learning Docker Compose <br>  ';
echo 'ini sebuah testing <br>';

$hostname = $_ENV["MARIADB_HOST"];
$username = $_ENV["MARIADB_USER"];
$password = $_ENV["MARIADB_PASSWORD"];
$database = $_ENV["MARIADB_DATABASE"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Faild: " . $conn->connect_error);
}

echo "Connected successfully <br>";

$query = "select * from city";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"] . " \t- Name: " . $row["Name"] . " \t- CountryCode: " . $row["CountryCode"] . " \t- District: " . $row["District"] . " \t- Population: " . $row["Population"] . "<br>";
    }
} else {
    echo "0 results";
}
