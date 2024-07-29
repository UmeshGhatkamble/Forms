<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking_database";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$vehicle_number = $_POST['vehicle_number'];
$owner_name = $_POST['owner_name'];
$contact_number = $_POST['contact_number'];
$parking_duration = $_POST['parking_duration'];


$sql = "INSERT INTO parking_records (vehicle_number, owner_name, contact_number, parking_duration)
        VALUES ('$vehicle_number', '$owner_name', '$contact_number', '$parking_duration')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
