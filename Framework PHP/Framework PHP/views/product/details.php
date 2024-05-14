<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <?php if (isset($product_id)): ?>
        <p>Details for product with ID: <?php echo $product_id; ?></p>
    <?php else: ?>
        <p>Error: Product ID not provided.</p>
    <?php endif; ?>
    <nav>
        <a href="/Framework%20PHP/">Home</a> |
        <a href="/Framework%20PHP/home/about">About</a> |
        <a href="/Framework%20PHP/home/contact">Contact</a> |
        <a href="/Framework%20PHP/product">Products</a>
    </nav>
</body>
</html>
