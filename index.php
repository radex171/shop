<?php
require __DIR__ . '/vendor/autoload.php';

use Radex171\Shop\Product;
use Radex171\Shop\Cart;

$bread = new Product('Chleb', 4.5);
$milk = new Product('Mleko', 3.2);
$apple = new Product('Jabłko', 0.8);
$cheese = new Product('Ser żółty', 12.0);
$tomato = new Product('Pomidor', 2.5);
$cucumber = new Product('Ogórek', 1.8);
$pepper = new Product('Papryka', 3.5);
$butter = new Product('Masło', 5.0);
$yogurt = new Product('Jogurt', 2.2);
$eggs = new Product('Jajka 10 szt.', 7.0);
$chocolate = new Product('Czekolada', 4.0);
$coffee = new Product('Kawa', 15.0);

//koszyk
$cart = new Cart();
$cart->addProduct($bread);
$cart->addProduct($milk);
$cart->addProduct($apple);
$cart->addProduct($cheese);
$cart->addProduct($tomato);
$cart->addProduct($cucumber);
$cart->addProduct($pepper);
$cart->addProduct($butter);
$cart->addProduct($yogurt);
$cart->addProduct($eggs);
$cart->addProduct($chocolate);
$cart->addProduct($coffee);


print_r("Suma w koszyku: " . $cart->getTotal() . " zł\n");