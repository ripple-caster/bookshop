<?php
include('config.php');

$query = "SELECT * FROM books";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshop - Books</title>
</head>
<body>
    <h2>Available Books</h2>
    <ul>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['title']} - {$row['author']} ({$row['price']}$)</li>";
        }
        ?>
    </ul>
</body>
</html>
