<?php
// update_product.php <id> <new-name>

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product===null) {
    echo "product not found\n";
    exit();
}

$product->setName($newName);

$entityManager->flush();
