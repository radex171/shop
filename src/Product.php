<?php

namespace Radex171\Shop;

class Product {
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}