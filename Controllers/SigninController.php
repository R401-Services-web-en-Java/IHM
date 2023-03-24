<?php
final class SigninController{

    public function defaultAction() : void{
        View::show("signin/form");
    }

    public function connectAction(Array $A_parametres = null, Array $A_postParams = null){
        if(Users::isUser($A_postParams)){
            $S_status = Users::getStatus($A_postParams['id']);
            Session::start($S_status, $A_postParams['id']);
            header("location: /home");
            exit;
        }
        else{
            header("location: /signup");
            exit;
        }
    }
}