<?php

namespace App\Models;

// Represents a product category with a name and description.
class Category
{
    // Category name.
    private string $name;

    // Category description.
    private string $description;

    // Creates a new category.
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    // Returns the category name.
    public function getName(): string
    {
        return $this->name;
    }

    // Returns a formatted description of the category.
    public function describe(): string
    {
        return $this->name . ": " . $this->description;
    }
}