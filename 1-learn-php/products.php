<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>

<?php
$productText = file_get_contents("https://fakestoreapi.com/products");
// echo $productText;
$products = json_decode($productText,true);
// print_r($products);
?>

<div class="">
    <?php foreach($products as $product): ?>
        <div class="">
            <img src="<?= $product["image"] ?>" width="200" alt="">
            <h3><?= $product["title"] ?></h3>
            <p><?= $product["description"] ?></p>
        </div>
    <?php endforeach; ?>
</div>
    
</body>
</html>