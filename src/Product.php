<?php

namespace Radex171\Shop;

class Product {
private static int $nextId = 1;

    public int $id;
    public string $name;
    public float $price;
    public string $unit;

    public function __construct(string $name,float $price, string $unit = 'szt'){
        $this->id = self::$nextId++;
        $this->name = $name;
        $this->price = $price;
        $this->unit = $unit;
    }
}