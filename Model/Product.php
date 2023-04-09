<?php
/*
CREATE TABLE PRODUCTS (
  id INT AUTO_INCREMENT PRIMARY KEY,
  quantity_stock INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  unit ENUM('kg', 'litre', 'unité') NOT NULL
);
 */

/**
 *
 */
final class Product{

    /**
     *
     */
    const URL           = 'http://localhost:8080/API-Produits-et-Utilisateurs-1.0-SNAPSHOT/api/products';


    /**
     * @return mixed
     * @throws Exception
     */
    public static function getAll(){
        return Api::requete(self::URL);
    }

    /**
     * @param $S_id
     * @return mixed
     * @throws Exception
     */
    public static function getOne($S_id){
        return Api::requete(self::URL, $S_id);
    }

    /**
     * @param $S_id
     * @return mixed
     * @throws Exception
     */
    public static function delete($S_id){
        return Api::requete(self::URL, $S_id, "DELETE");
    }

    /**
     * @param $A_data
     * @return mixed
     * @throws Exception
     */
    public static function update($A_data){
        $S_id = $A_data["name"];
        unset($A_data["name"]);
        return Api::requetePost(self::URL, $A_data, $S_id);
    }

    /**
     * @param $A_data
     * @return true
     * @throws Exception
     */
    public static function add($A_data){
        Api::requetePostAdd(self::URL, $A_data); 
        return true;
    }

}