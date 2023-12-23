<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM materials WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $description = $row['description'];
        $embedLink = $row['embedLink'];
    } else {
        echo "Material not found.";
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
    <title>Edit Material</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Material</h2>
    <form action="updateMaterial.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
        <label for="description">Description:</label>
        <input type="text" name="description" value="<?php echo $description; ?>" required>
        <label for="embedLink">Embed Link:</label>
        <input type="text" name="embedLink" value="<?php echo $embedLink; ?>" required>
        <button type="submit">Update Material</button>
    </form>
    
    <a href="material_home.php">
        <button>Back to Material Home</button>
    </a>
</body>
</html>
