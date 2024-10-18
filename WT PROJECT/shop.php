<?php
include 'includes/db.php';
$search_query = "";
$category_filter = "";

if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
}

if (isset($_GET['category'])) {
    $category_filter = $_GET['category'];
}

$sql = "SELECT * FROM products WHERE 1";

if ($search_query) {
    $sql .= " AND product_name LIKE '%$search_query%'";
}

if ($category_filter) {
    $sql .= " AND category = '$category_filter'";
}

$result = $shop_conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="products">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='" . $row["image_url"] . "' alt='Product Image'>";
            echo "<h3>" . $row["product_name"] . "</h3>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo "<a href='product_details.php?id=" . $row["id"] . "'>View Details</a>";
            echo "</div>";
        }
    } else {
        echo "No products found";
    }
    ?>
</div>
</body>
</html>
