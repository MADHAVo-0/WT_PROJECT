<?php
include 'includes/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>ShopEase</h1>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="account-cart">
        <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
        <a href="cart.php">Cart</a>
    </div>
</header>

<!-- Page container to wrap content -->
<div class="container">
    <!-- Left side category section -->
    <div class="categories">
        <h2>Shop by Categories</h2>
        <div class="category-list">
            <a href="shop.php?category=electronics">Electronics</a>
            <a href="shop.php?category=clothing">Clothing</a>
            <a href="shop.php?category=accessories">Accessories</a>
        </div>
    </div>

    <!-- Main content (search bar and products) -->
    <div class="main-content">
    <div class="search-bar">
    <form method="GET" action="shop.php">
        <input type="text" name="search" placeholder="Search for products...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>


        <!-- You can add more content or products here -->
        <div class="products">
            <!-- Example product listing -->
            <div class="product">
                <img src="images/sample-product.jpg" alt="Sample Product">
                <h3>Sample Product</h3>
                <button>Add to Cart</button>
            </div>
            <!-- Repeat product cards here -->
        </div>
    </div>
</div>
</body>
</html>
