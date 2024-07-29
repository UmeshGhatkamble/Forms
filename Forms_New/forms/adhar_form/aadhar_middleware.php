<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aadhar_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirm_password = md5($_POST['confirm_password']);
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$occupation = $_POST['occupation'];
$marital_status = $_POST['marital_status'];
$education_level = $_POST['education_level'];
$languages_known = isset($_POST['languages_known']) ? implode(", ", $_POST['languages_known']) : "";
$upload_photo = ""; // Will store the file name

// Check if a file was uploaded
if(isset($_FILES['upload_photo']) && $_FILES['upload_photo']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . basename($_FILES['upload_photo']['name']);
    
    // Move the uploaded file to the destination directory
    if(move_uploaded_file($_FILES['upload_photo']['tmp_name'], $upload_file)) {
        $upload_photo = basename($_FILES['upload_photo']['name']);
    } else {
        echo "Error uploading file.";
        exit();
    }
}

// Insert data into the database
$sql = "INSERT INTO aadhar_records (
    full_name, email, password, gender, birthdate, address, phone_number, occupation,
    marital_status, education_level, languages_known, upload_photo
) VALUES (
    '$full_name', '$email', '$password', '$gender', '$birthdate', '$address', '$phone_number', '$occupation',
    '$marital_status', '$education_level', '$languages_known', '$upload_photo'
)";

if ($conn->query($sql) === TRUE) {
    echo "Aadhar Card registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
