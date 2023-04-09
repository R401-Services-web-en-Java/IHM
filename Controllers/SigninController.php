<?php

/**
 *
 */
final class SigninController{

    /**
     * @return void
     */
    public function defaultAction() : void{
        View::show("signin/form");
    }

    /**
     * @param array|null $A_parametres
     * @param array|null $A_postParams
     * @return void
     */
    public function connectAction(Array $A_parametres = null, Array $A_postParams = null){
        if(Users::isUser($A_postParams)){
            $S_status = Users::getStatus($A_postParams['username']);
            Session::start($S_status, $A_postParams['username']);
            header("location: /home");
            exit;
        }
        else{
            header("location: /signip");
            exit;
        }
    }

    /**
     * @return void
     */
    public function disconnectAction() : void{
        Session::destroy();
        header("location: /home");
        exit;
    }

    
}