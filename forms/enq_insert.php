<?php
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from POST
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$course  = $_POST['course'] ?? '';
$message = $_POST['message'] ?? '';

// SQL to insert data
$sql = "INSERT INTO enquiry (name, email, phone, course, message)
        VALUES ('$name', '$email', '$phone', '$course', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Enquiry submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
