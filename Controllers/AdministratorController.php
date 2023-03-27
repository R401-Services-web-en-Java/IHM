<?php

final class AdministratorController{
    public function defaultAction(): void{
        $A_allUsers = Users::getAll();
        View::show("administrator/administrator");
        View::show("administrator/user", $A_allUsers);
        $A_products = Product::getAll();
        View::show("administrator/products", $A_products);
    }
}