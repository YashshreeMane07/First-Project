<?php
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course = $_POST['course'];
$year = $_POST['year'];
$address = $_POST['address'];

$sql = "INSERT INTO admission (full_name, email, mobile, course, year, address)
        VALUES ('$full_name', '$email', '$mobile', '$course', '$year', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Admission form submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
