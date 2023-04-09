<?php

/**
 *
 */
final class AdministratorController{
    /**
     * @return void
     */
    public function defaultAction(): void{
        $A_products = Product::getAll();
        View::show("administrator/products", $A_products);
        $A_allUsers = Users::getAll();
        View::show("administrator/administrator");
        View::show("administrator/user", $A_allUsers);
        
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function modifyorDeleteProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if ($A_postParams['submit'] == "Supprimmer"){
            Product::delete($A_postParams['name']);
            header("Location: /administrator");
            exit;
        }else{
            View::show("administrator/formProducts", Product::getOne($A_postParams['name']));
        }
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function modifyProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        Product::update($A_postParams);
        header("Location: /administrator");
        exit;
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function modifyorDeleteUserAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if ($A_postParams['submit'] == "Supprimmer"){
            Users::delete($A_postParams['username']);
            header("Location: /administrator");
            exit;
        }else{
            View::show("administrator/account", Users::getOne($A_postParams['username']));
        }
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function addProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if(Product::add($A_postParams)){
            header("Location: /administrator");
            exit;
        }
    }
    
}