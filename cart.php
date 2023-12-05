<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $book_id = $_POST['book_id'];
    array_push($_SESSION['cart'], $book_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshop - Shopping Cart</title>
</head>
<body>
    <h2>Shopping Cart</h2>
    <ul>
        <?php
        foreach ($_SESSION['cart'] as $book_id) {
            // Fetch book details from the database and display here
            // Implement logic to calculate the total price
        }
        ?>
    </ul>
</body>
</html>
