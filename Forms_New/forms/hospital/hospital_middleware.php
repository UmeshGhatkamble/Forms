<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$hospital_name = $_POST['hospital_name'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$specialty = $_POST['specialty'];

// Insert data into the database
$sql = "INSERT INTO hospital_records (hospital_name, address, contact_number, specialty)
        VALUES ('$hospital_name', '$address', '$contact_number', '$specialty')";

if ($conn->query($sql) === TRUE) {
    echo "Hospital registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
