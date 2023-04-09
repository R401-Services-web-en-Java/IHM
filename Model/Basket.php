<?php

final class Basket{
    /*

CREATE TABLE BASKET (
  basket_id,
  confirmation_date DATE,
  confirmed boolean,
  username VARCHAR(100) NOT NULL,
  PRIMARY KEY(basket_id,username)
);
    */


    const URL           = 'http://localhost:8080/API-Paniers-1.0-SNAPSHOT/api/baskets';
    const URLCONTENT           = 'http://localhost:8080/API-Paniers-1.0-SNAPSHOT/api/contents';

    public static function getAll(){
      return Api::requete(self::URL);
    }

    public static function getForUser($S_id){
        return Api::requete(self::URL, $S_id, "GET");
      }

    public static function getOne($S_id){
        return Api::requete(self::URL, $S_id, "GET");
    }

    public static function delete($S_id){
        /**
         *  http://localhost:8080/API-Paniers-1.0-SNAPSHOT/api/baskets/$S_id 
         * -X DELETE
         * 
         * Mais on ne peut pas supprimer un panier si il contient des produits
        */
        return Api::requete(self::URL, $S_id, "DELETE");
    }

    public static function update($A_data, $S_id){
        return Api::requetePost(self::URL, $A_data, $S_id);
    }

    public static function createBasket(){
        $A_data = array(
            "username" => $_SESSION['id'],
            "confirmed" => false,
            "confirmation_date" => date("Y-m-d", time()),
            "basket_id" => intval(uniqid()) + rand(0, 999999)
        );
        return Api::requetePostAdd(self::URL, $A_data);
    }

    public static function getAllContentOne($S_id){
        return Api::requete(self::URLCONTENT, $S_id);
    }





    public static function getProductFromBasket($A_data){
        return Api::requeteGetBasket(self::URLCONTENT, array($A_data['basket_id'], $A_data['product_name']));
    }

    public static function addProductToBasket($A_data){
/*
        $A_basket = self::getOne($A_data['basket_id']);
        $A_basket['confirmation_date'] = date("Y-m-d", time());
        self::update($A_basket, $A_data['basket_id']);*/

        return Api::requetePostAdd(self::URLCONTENT, $A_data);
    }

    public static function deleteProductFromBasket($A_data){/*
        $A_basket = self::getOne($A_data["basket_id"]);
        $A_basket['confirmation_date'] = date("Y-m-d", time());
        self::update($A_basket, $A_data["basket_id"]);*/
        return Api::requeteGetBasket(self::URLCONTENT, array($A_data['basket_id'], $A_data['product_name']), "DELETE");
    }

    public static function updateProductFromBasket($A_data){

      /*  $A_basket = self::getOne($A_data['basket_id']);
        $A_basket['confirmation_date'] = date("Y-m-d", time());
        self::update($A_basket, $A_data['basket_id']); */
        unset($A_data['submit']);
        return Api::requetePostBasket(self::URLCONTENT, $A_data, array($A_data['basket_id'], $A_data['product_name']));
    }
}