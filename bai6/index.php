<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "webshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

echo '<pre>';
//print_r($conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO test (`name`,detail) 
        VALUES ('iphone12', 'iphone 12 green 128gb')";

if (mysqli_query($conn, $sql)) {
    echo "New insert successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
