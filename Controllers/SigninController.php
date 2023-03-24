<?php
final class SigninController{

    public function defaultAction() : void{
        View::show("signin/form");
    }

}