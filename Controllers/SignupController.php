<?php

/**
 *
 */
final class SignupController{

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function defaultAction(Array $A_parametres = null, Array $A_postParams = null) : void{
        View::show("signup/form");
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function registerAction(Array $A_parametres = null, Array $A_postParams = null) : void{
        if (Users::create($A_postParams)){
            Session::start("user", $A_postParams['username']);
            header("location: /home");
            exit;
        }
    }

}