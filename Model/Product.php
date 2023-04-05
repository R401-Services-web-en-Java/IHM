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

    const URL           = 'http://localhost:8080/API-Produits-et-Utilisateurs-1.0-SNAPSHOT/api/products';


    public static function getAll(){
        return Api::requete(self::URL);
    }

    public static function getOne($S_id){
        return Api::requete(self::URL, array($S_id));
    }

    public static function delete($S_id){
        return Api::requete(self::URL, $S_id, "DELETE");
    }

    public static function update($A_data){
        return Api::requetePost(self::URL, $A_data, $A_data["name"]);
    }

    public static function add($A_data){
        /*
        return Api::requete(self::URL."add", $A_data);
        */  
    }

}