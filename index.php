<?php

// Load Composer autoload so project classes can be found automatically.
require __DIR__ . '/vendor/autoload.php';

// Import the needed classes from the app namespace.
use App\Models\Category;
use App\Models\Product;

// Create a category for electronics.
$electronics = new Category('Electronics', 'Gadgets and devices');

// Create sample products under that category.
$laptop = new Product('Laptop', 45000, 5, $electronics);
$mouse  = new Product('Mouse', 500, 0, $electronics);

// Display the category description.
echo $electronics->describe() . "\n";
echo "---------------------\n";

// Loop through the products and display their information.
foreach ([$laptop, $mouse] as $product) {
    // Show the product name.
    echo "Product: " . $product->getName() . "\n";

    // Show the product category.
    echo "Category: " . $product->getCategory()->getName() . "\n";

    // Show the total stock value.
    echo "Total value: " . number_format($product->getTotalValue(), 2) . "\n";

    // Check if the item is in stock.
    echo "In stock? " . ($product->isInStock() ? 'Yes' : 'No') . "\n";

    // Apply a 10% discount and display the discounted price.
    echo "After 10% discount: " . number_format($product->applyDiscount(10), 2) . "\n\n";
}