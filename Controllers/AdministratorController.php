<?php

final class AdministratorController{
    public function defaultAction(): void{
        $A_products = Product::getAll();
        View::show("administrator/products", $A_products);
        $A_allUsers = Users::getAll();
        View::show("administrator/administrator");
        View::show("administrator/user", $A_allUsers);
        
    }

    public function modifyorDeleteProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if ($A_postParams['submit'] == "Supprimmer"){
            Product::delete($A_postParams['name']);
            header("Location: /administrator");
            exit;
        }else{
            View::show("administrator/formProducts", $A_postParams);
        }
    }

    public function modifyProductAction(Array $A_parametres = null, Array $A_postParams = null): void{
        Product::update($A_postParams);
        header("Location: /administrator");
        exit;
    }


    public function modifyorDeleteUserAction(Array $A_parametres = null, Array $A_postParams = null): void{
        if ($A_postParams['submit'] == "Supprimmer"){
            Users::delete($A_postParams['username']);
            header("Location: /administrator");
            exit;
        }else{
            View::show("administrator/formUsers", Users::getOne($A_postParams['username']));
        }
    }
}