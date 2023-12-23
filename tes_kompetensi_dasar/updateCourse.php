<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];

    $sql = "UPDATE courses SET title='$title', description='$description', duration='$duration' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: course_home.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
