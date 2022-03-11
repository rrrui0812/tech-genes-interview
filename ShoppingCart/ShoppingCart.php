<?php

namespace App\ShoppingCart;

use App\Product\Product;

class ShoppingCart
{
    private array $shoppingCart = [];
    private int $productsTotalCount = 0;
    private int $productsTotalPrice = 0;

    public function addProduct(Product $product)
    {
        $this->shoppingCart[] = $product;
        $this->countProducts();
        $this->calculateProductsPrice();
    }

    private function countProducts()
    {
        $this->productsTotalCount = 0;

        for ($currentIndex = 0; $currentIndex < count($this->shoppingCart); $currentIndex++) {
            $this->productsTotalCount += $this->shoppingCart[$currentIndex]->count;
        }
    }

    private function calculateProductsPrice()
    {
        $this->productsTotalPrice = 0;

        for ($currentIndex = 0; $currentIndex < count($this->shoppingCart); $currentIndex++) {
            $currentProduct = $this->shoppingCart[$currentIndex];
            $this->productsTotalPrice += ($currentProduct->count * $currentProduct->price);
        }
    }

    public function getShoppingCart(): array
    {
        return $this->shoppingCart;
    }

    public function getProductsTotalCount(): int
    {
        return $this->productsTotalCount;
    }

    public function getProductsTotalPrice(): int
    {
        return $this->productsTotalPrice;
    }
}
