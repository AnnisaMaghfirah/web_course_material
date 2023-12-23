<?php
include 'db.php';

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['title']} - {$row['description']} ({$row['duration']}) ";
        echo "<a href='editCourse.php?id={$row['id']}'>Edit</a> | ";
        echo "<a href='deleteCourse.php?id={$row['id']}'>Delete</a></li>";
    }
    echo "</ul>";
} else {
    echo "No courses found.";
}

$conn->close();
?>
