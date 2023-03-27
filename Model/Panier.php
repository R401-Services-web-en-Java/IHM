<?php

final class Panier{

    const URL           = 'https://example.com/api/baskets';

    public static function getAll(){
        # recup tout la table produit chez fred

        #return Api::requete(self::URL."getAll");
        return array(array("id"=> "pomme", "quantity" => 100, "price" => 1.20),
        array("id"=> "poire", "quantity" => 50, "price" => 5),
        array("id"=> "pomme de terre", "quantity" => 1, "price" => 5),
        array("id"=> "vanille", "quantity" => 50, "price" => 50),
        array("id"=> "poire", "quantity" => 50, "price" => 5),
        array("id"=> "fraise", "quantity" => 100, "price" => 2));
    }

    public static function getOne($S_id){
        /*
        return Api::requete(self::URL."getOne/", array($S_id));
        */        
    }

    public static function delete($S_id){
                /*
        return Api::requete(self::URL."getOne/", array($S_id));
        */  
    }

    public static function update($A_data){
        /*
        return Api::requete(self::URL."getOne/", $A_data);
        */  
    }

    public static function add($A_data){
        /*
        return Api::requete(self::URL."getOne/", $A_data);
        */  
    }
}