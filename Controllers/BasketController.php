<?php

final class BasketController{

    public function defaultAction(): void{
        if (!Session::check()){
            header("Location: /home");
            exit;
        }
        $A_listBasket = Basket::getForUser($_SESSION['id']);
        if (empty($A_listBasket)){
            Basket::createBasket();
            $A_listBasket = Basket::getForUser($_SESSION['id']);
        }
        View::show("basket/listBasket", $A_listBasket);
    }



    public function addAction(): void{
        Basket::createBasket();
        header("Location: /basket");
    }


    public function addProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if (!Session::check()){
            header("Location: /home");
            exit;
        }
        
        unset($A_postParams['submit']);
        $A_postParams['username'] = $_SESSION['id'];
        Basket::addProductToBasket($A_postParams);
        header("Location: /basket");
        exit;
    }

    public function seeBasketAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if (!Session::check()){
            header("Location: /home");
            exit;
        }


        if($A_postParams['submit'] == "Supprimer"){
            Basket::delete($A_postParams['basket_id']);
            header("Location: /basket");
            exit;
        }

        
        View::show("basket/seeBasket", Basket::getAllContentOne($A_postParams['basket_id']));
        $A_data = Product::getAll();
        $A_data['basket_id'] = $A_postParams['basket_id'];
        View::show("basket/listProduct", $A_data);
    }

    public function modifyordeleteproductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if (!Session::check()){
            header("Location: /home");
            exit;
        }
        if($A_postParams['submit'] == "Modifier"){
            Basket::updateProductFromBasket($A_postParams);
        }
        else{
            Basket::deleteProductFromBasket(array($A_postParams['basket_id'], 
            $A_postParams['name']));
        }
        View::show("basket/seeBasket", Basket::getOne($A_postParams['basket_id']));
    }
}