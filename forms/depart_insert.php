<?php
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dept_name      = $_POST['dept_name'];
$dept_head      = $_POST['dept_head'];
$faculty_count  = $_POST['faculty_count'];
$email          = $_POST['email'];
$description    = $_POST['description'];

$sql = "INSERT INTO departments (dept_name, dept_head, faculty_count, email, description)
        VALUES ('$dept_name', '$dept_head', '$faculty_count', '$email', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Department added successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
