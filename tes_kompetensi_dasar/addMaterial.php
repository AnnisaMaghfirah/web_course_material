<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $embedLink = $_POST["embedLink"];

    $sql = "INSERT INTO materials (title, description, embedLink) VALUES ('$title', '$description', '$embedLink')";

    if ($conn->query($sql) === TRUE) {
        header("Location: material_home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
