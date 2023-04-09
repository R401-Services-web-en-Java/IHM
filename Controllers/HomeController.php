<?php

/**
 *
 */
final class HomeController
{
    /**
     * @return void
     */
    public function defaultAction(): void{

        View::show("home/home");
        View::show("home/products", Product::getAll());
    }
}