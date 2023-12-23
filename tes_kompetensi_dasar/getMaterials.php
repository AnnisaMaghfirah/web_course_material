<?php
include 'db.php';

$sql = "SELECT * FROM materials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['title']} - {$row['description']} - ";
        echo "<a href='{$row['embedLink']}' target='_blank'>View Material</a>";
        echo "<a href='editMaterial.php?id={$row['id']}'> | Edit</a> | ";
        echo "<a href='deleteMaterial.php?id={$row['id']}'>Delete</a></li>";
    }
    echo "</ul>";
} else {
    echo "No materials found.";
}

$conn->close();
?>
