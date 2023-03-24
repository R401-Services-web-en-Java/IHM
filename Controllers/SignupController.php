<?php
final class SignupController{
    public function defaultAction(Array $A_parametres = null, Array $A_postParams = null) : void{
        View::show("signup/form");
    }
}