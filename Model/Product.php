<?php

final class Product{

    public static function getAll(){
        # recup tout la table produit chez fred
        return array(array("id"=> "pomme", "quantity" => 100, "price" => 1.20),
        array("id"=> "poire", "quantity" => 50, "price" => 5),
        array("id"=> "pomme de terre", "quantity" => 1, "price" => 5),
        array("id"=> "vanille", "quantity" => 50, "price" => 50),
        array("id"=> "poire", "quantity" => 50, "price" => 5),
        array("id"=> "fraise", "quantity" => 100, "price" => 2));
    }

}