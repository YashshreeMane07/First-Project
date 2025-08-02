<?php
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from POST
$student_name   = $_POST['student_name'];
$student_email  = $_POST['student_email'];
$department     = $_POST['department'];
$faculty_name   = $_POST['faculty_name'];
$subject        = $_POST['subject'];
$message        = $_POST['message'];

// SQL to insert data
$sql = "INSERT INTO faculty (student_name, student_email, department, faculty_name, subject, message)
        VALUES ('$student_name', '$student_email', '$department', '$faculty_name', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Faculty contact submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
