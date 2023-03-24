<?php
final class SignupController{

    public function defaultAction(Array $A_parametres = null, Array $A_postParams = null) : void{
        View::show("signup/form");
    }

    public function registerAction(Array $A_parametres = null, Array $A_postParams = null) : void{
        if (Users::create($A_postParams)){
            $S_status = Users::getStatus($A_postParams['id']);
            Session::start($S_status, $A_postParams['id']);
            header("location: /home");
            exit;
        }
    }

}