<?php

namespace App\Models;

use App\Contracts\Discountable;

// Represents a product in the store inventory.
class Product implements Discountable
{
    // Product name.
    private string $name;

    // Product price.
    private float $price;

    // Quantity currently available in stock.
    private int $stock;

    // Category of the product.
    private Category $category;

    // Initializes a new product instance.
    public function __construct(string $name, float $price, int $stock, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
    }

    // Required method from the Discountable interface.
    // Applies a percentage discount to the product price.
    public function applyDiscount(float $percent): float
    {
        return $this->price - ($this->price * $percent / 100);
    }

    // Computes the total monetary value of all items in stock.
    public function getTotalValue(): float
    {
        return $this->price * $this->stock;
    }

    // Checks whether the product has available stock.
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    // Returns the product's name.
    public function getName(): string
    {
        return $this->name;
    }

    // Returns the category assigned to the product.
    public function getCategory(): Category
    {
        return $this->category;
    }
}