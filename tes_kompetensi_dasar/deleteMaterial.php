<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM materials WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: material_home.php");
    } else {
        echo "Error deleting material: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
