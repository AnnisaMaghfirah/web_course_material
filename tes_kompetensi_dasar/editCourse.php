<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM courses WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $description = $row['description'];
        $duration = $row['duration'];
    } else {
        echo "Course not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Course</h2>
    <form action="updateCourse.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title: </label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
        <label for="description">Description: </label>
        <input type="text" name="description" value="<?php echo $description; ?>" required>
        <label for="duration">Duration: </label>
        <input type="text" name="duration" value="<?php echo $duration; ?>" required>
        <button type="submit">Update Course</button>
    </form>
    
    <a href="course_home.php">
        <button>Back to Course Home</button>
    </a>
</body>
</html>
