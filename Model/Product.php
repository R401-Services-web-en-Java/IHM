<?php
/*
CREATE TABLE PRODUCTS (
  id INT AUTO_INCREMENT PRIMARY KEY,
  quantity_stock INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  unit ENUM('kg', 'litre', 'unité') NOT NULL
);
 */
final class Product{

    const URL           = 'https://example.com/api/products/';

    public static function getAll(){
        # recup tout la table produit chez fred

        #return Api::requete(self::URL."getAll");
        return array(array("id"=> "pomme", "quantity_stock" => 100, "unit" => 'kg', "price" => 1.20),
        array("id"=> "poire", "quantity_stock" => 50, "price" => 5, "unit" => 'kg'),
        array("id"=> "pomme de terre", "quantity_stock" => 1, "price" => 5, "unit" => 'kg'),
        array("id"=> "vanille", "quantity_stock" => 50, "price" => 50, "unit" => 'kg'),
        array("id"=> "poire", "quantity_stock" => 50, "price" => 5, "unit" => 'kg'),
        array("id"=> "fraise", "quantity_stock" => 100, "price" => 2, "unit" => 'kg'));
    }

    public static function getOne($S_id){
        return array("id"=> "poire", "quantity_stock" => 50, "price" => 5, "unit" => 'kg');
        /*
        return Api::requete(self::URL."getOne", array($S_id));
        */        
    }

    public static function delete($S_id){
                /*
        return Api::requete(self::URL."delete", array($S_id));
        */  
    }

    public static function update($A_data){
        /*
        return Api::requete(self::URL."update", $A_data);
        */  
    }

    public static function add($A_data){
        /*
        return Api::requete(self::URL."add", $A_data);
        */  
    }

}