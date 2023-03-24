<?php

final class HomeController
{
    public function defaultAction(): void{
        View::show("home/home");

        $A_products = Product::getAll();

        View::show("home/products", $A_products);
    }
}