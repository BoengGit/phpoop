<?php

require_once "data/Product.php";

$product = new Product("Jeruk", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 50000);
$dummy->info();