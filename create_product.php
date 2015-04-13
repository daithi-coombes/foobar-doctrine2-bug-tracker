<?php
// create_product.php
require "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created product with id: " . $product->getId() . "\n";
