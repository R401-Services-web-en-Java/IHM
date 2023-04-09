<?php

final class HomeController
{
    public function defaultAction(): void{

        View::show("home/home");
        View::show("home/products", Product::getAll());
    }
}