<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Cart Logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Your Cart</h2>
<div class="cart-items">
    <?php
    if (!empty($_SESSION['cart'])) {
        // Display items
    } else {
        echo "<p>Your cart is empty</p>";
    }
    ?>
</div>
</body>
</html>
