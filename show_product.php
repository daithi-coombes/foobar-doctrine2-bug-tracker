<?php
// show_product.php
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product===null) {
    echo "no product found\n";
    exit();
}

echo sprintf("%s\n", $product->getName());
