<?php

namespace App\Product;

class Product
{
    public string $name;
    public int $count;
    public int $price;

    public function __construct(string $name, int $count, int $price)
    {
        $this->name = $name;
        $this->count = $count;
        $this->price = $price;
    }
}
