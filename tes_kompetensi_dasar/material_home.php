<!-- material_home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Material Home</h1>
    <h2>Materials</h2>
    <?php include 'getMaterials.php'; ?>

    <form action="addMaterial.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="description">Description:</label>
        <input type="text" name="description" required>
        <label for="embedLink">Embed Link:</label>
        <input type="text" name="embedLink" required>
        <button type="submit">Add Material</button>
    </form>
    
    <a href="index.php">
        <button>Back to Home</button>
    </a>
</body>
</html>
