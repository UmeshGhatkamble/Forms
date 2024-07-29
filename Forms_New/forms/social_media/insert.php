<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password =md5 ($_POST['password']);
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$interests = $_POST['interests'];
$newsletter = isset($_POST['newsletter']) ? 1 : 0;
$terms = $_POST['terms'];
$notification_preference = $_POST['notification_preference'];

// Insert data into the database
$sql = "INSERT INTO social_media_db (username, email, password, gender, birthdate, interests, newsletter, terms, notification_preference)
        VALUES ('$username', '$email', '$password', '$gender', '$birthdate', '$interests', '$newsletter', '$terms', '$notification_preference')";

if ($conn->query($sql) === TRUE) {
    echo "Social media registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
