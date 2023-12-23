<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];

    $sql = "INSERT INTO courses (title, description, duration) VALUES ('$title', '$description', '$duration')";

    if ($conn->query($sql) === TRUE) {
        header("Location: course_home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
