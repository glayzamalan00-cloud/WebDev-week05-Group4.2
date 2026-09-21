<?php

namespace App\Contracts;

// Defines a contract for all entities that can apply a discount.
interface Discountable
{
    // Applies a percentage discount to the current value.
    // @param float $percent The discount percentage, e.g. 10 for 10%.
    // @return float The discounted value after calculation.
    public function applyDiscount(float $percent): float;
}