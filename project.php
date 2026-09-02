<?php
$file = "products.txt";

echo "Enter your name: ";
$name = trim(fgets(STDIN));

echo "Enter product name: ";
$product = trim(fgets(STDIN));

echo "Enter quantity: ";
$quantity = trim(fgets(STDIN));

$handle = fopen($file, "a");

fwrite($handle, "Name: $name | Product: $product | Quantity: $quantity\n");
fclose($handle);

echo "Data saved successfully!\n";

echo file_get_contents($file);





?>