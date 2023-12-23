<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $embedLink = $_POST["embedLink"];

    $sql = "UPDATE materials SET title='$title', description='$description', embedLink='$embedLink' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: material_home.php");
    } else {
        echo "Error updating material: " . $conn->error;
    }
}

$conn->close();
?>
