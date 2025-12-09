<?php
require __DIR__ . '/vendor/autoload.php';

use Radex171\Shop\Product;
use Radex171\Shop\Cart;

$bread = new Product('Chleb', 4.5, '1szt');
$milk = new Product('Mleko', 3.2, '1l');
$apple = new Product('Jabłko', 0.8,'1kg');
$cheese = new Product('Ser żółty', 12.0, '1kg');
$tomato = new Product('Pomidor', 2.5, '1kg');
$cucumber = new Product('Ogórek', 1.8, '1kg');
$pepper = new Product('Papryka', 3.5, '1kg');
$butter = new Product('Masło', 5.0, '250g');
$yogurt = new Product('Jogurt', 2.2, '250ml');
$eggs = new Product('Jajka', 7.0, '10szt');
$chocolate = new Product('Czekolada', 4.0, '100g');
$coffee = new Product('Kawa', 65.0, '1kg');

//koszyk

$cart = new Cart();

$cart->addProduct($milk, 2);              // dodaj 2x mleko
$cart->addProduct($bread, 1);             // dodaj 1x chleb
print_r("Suma w koszyku: " . $cart->getTotal() . " zł\n");
foreach ($cart->getItems() as $id => $item) {
    $product  = $item['product'];
    $quantity = $item['quantity'];
    $unit     = $item['unit'];

    echo "- {$product->name} ({$quantity} x {$unit}) x {$product->price} zł = "
        . ($product->price * $quantity) . " zł\n";
}
$cart->decreaseProduct($milk->id, 1);     // mleko: 2 -> 1
print_r("Suma w koszyku: " . $cart->getTotal() . " zł\n");
foreach ($cart->getItems() as $id => $item) {
    $product  = $item['product'];
    $quantity = $item['quantity'];
    $unit     = $item['unit'];

    echo "- {$product->name} ({$quantity} x {$unit}) x {$product->price} zł = "
        . ($product->price * $quantity) . " zł\n";
}
$cart->removeProduct($bread->id);         // chleb znika całkowicie


print_r("Suma w koszyku: " . $cart->getTotal() . " zł\n");

foreach ($cart->getItems() as $id => $item) {
    $product  = $item['product'];
    $quantity = $item['quantity'];
    $unit     = $item['unit'];

    echo "- {$product->name} ({$quantity} x {$unit}) x {$product->price} zł = "
        . ($product->price * $quantity) . " zł\n";
}