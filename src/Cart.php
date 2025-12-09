<?php

namespace Radex171\Shop;

class Cart
{
    /**
     * [
     *   productId => [
     *      'product'  => Product,
     *      'quantity' => float,
     *      'unit'     => string,
     *   ],
     * ]
     */
    private array $items = [];

    // Dodaj produkt (domyślnie 1 jednostka)
    public function addProduct(Product $product, float $quantity = 1): void
    {
        $id = $product->id;

        if (!isset($this->items[$id])) {
            $this->items[$id] = [
                'product'  => $product,
                'quantity' => $quantity,
                'unit'     => $product->unit,
            ];
        } else {
            $this->items[$id]['quantity'] += $quantity;
        }
    }

    // Zmniejsz ilość produktu; przy 0 usuń z koszyka
    public function decreaseProduct(int $productId, float $quantity = 1): void
    {
        if (!isset($this->items[$productId])) {
            return;
        }

        $this->items[$productId]['quantity'] -= $quantity;

        if ($this->items[$productId]['quantity'] <= 0) {
            unset($this->items[$productId]);
        }
    }

    // Usuń produkt całkowicie z koszyka
    public function removeProduct(int $productId): void
    {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    // Zwróć wszystkie pozycje
    public function getItems(): array
    {
        return $this->items;
    }

    // Suma koszyka: cena * ilość
    public function getTotal(): float
    {
        $total = 0.0;

        foreach ($this->items as $item) {
            $total += $item['product']->price * $item['quantity'];
        }

        return $total;
    }
}
