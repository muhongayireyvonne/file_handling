<?php

$file = "products.txt";


while (true) {
    echo "Enter your name: ";
    $name = trim(fgets(STDIN));

    if ($name == "") {
        echo "You did not enter your name. Please try again.\n";
    } else {
        break;
    }
}

while (true) {
    echo "Enter product name: ";
    $product = trim(fgets(STDIN));

    if ($product == "") {
        echo "You did not enter the product name. Please try again.\n";
    } else {
        break;
    }
}

while (true) {
    echo "Enter quantity: ";
    $quantity = trim(fgets(STDIN));

    if ($quantity == "")
         {
        echo "You did not enter the quantity. Please try again.\n";
    } elseif (!is_numeric($quantity) || $quantity <= 0) {
        echo "Please enter a valid quantity.\n";
    } else {
        break;
    }
}
$handle = fopen($file, "a");

if ($handle) {

    fwrite(
        $handle,
        "Name: $name | Product: $product | Quantity: $quantity\n"
    );

    fclose($handle);

    echo "Data saved successfully!\n";

} 

?>