<!-- course_home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Course Home</h1>
    <h2>Courses</h2>
    <?php include 'getCourses.php'; ?>

    <form action="addCourse.php" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" required>
        <label for="description">Description: </label>
        <input type="text" name="description" required>
        <label for="duration">Duration: </label>
        <input type="text" name="duration" required>
        <button type="submit">Add Course</button>
    </form>
    
    <a href="index.php">
        <button>Back to Home</button>
    </a>
</body>
</html>
