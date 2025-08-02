<?php
$conn = mysqli_connect("localhost", "root", "", "college_db"); // Change database name
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
