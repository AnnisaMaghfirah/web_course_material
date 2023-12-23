<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background-image">
    <div id="home-container">
        <h1>Welcome to Course Management System</h1>
        <div id="home-buttons">
            <a href="course_home.php">
                <button>Courses</button>
            </a>
            <a href="material_home.php">
                <button>Materials</button>
            </a>
        </div>
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Course App</title>
</head>
<body>
    <h1>Course Management</h1>

    <h2>Courses</h2>
    <?php include 'getCourses.php'; ?>

    <h2>Add Course</h2>
    <form action="addCourse.php" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" required>
        <label for="description">Description: </label>
        <input type="text" name="description" required>
        <label for="duration">Duration: </label>
        <input type="text" name="duration" required>
        <button type="submit">Add Course</button>
    </form>

    <h2>Materials</h2>
    <?php include 'getMaterials.php'; ?>

    <h2>Add Material</h2>
    <form action="addMaterial.php" method="post">
        <label for="courseId">Course: </label>
        <input type="text" name="courseId" required>
        <label for="title">Title: </label>
        <input type="text" name="title" required>
        <label for="description">Description: </label>
        <input type="text" name="description" required>
        <label for="embedLink">Embed Link: </label>
        <input type="text" name="embedLink" required>
        <button type="submit">Add Material</button>
    </form>

    <!-- Add similar UI for editing and deleting courses and materials -->

</body>
</html> -->
