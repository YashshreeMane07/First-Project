<?php
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_name = $_POST['student_name'];
$department = $_POST['department'];
$faculty_name = $_POST['faculty_name'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

$sql = "INSERT INTO feedback (student_name, department, faculty_name, feedback, rating)
        VALUES ('$student_name', '$department', '$faculty_name', '$feedback', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
