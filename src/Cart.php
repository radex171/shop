<?php

namespace Radex171\Shop;

class Cart {
    public $items = [];
    
    public function addProduct(Product $product){
        $this->items[] = $product;
    } 

    public function getTotal(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item->price;
        }

        return $total;

    }

}