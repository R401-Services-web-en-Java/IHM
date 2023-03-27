<?php

final class Users{

    public static function isUser($A_param):bool{
        $A_param['password'] = hash('sha512', $A_param['password'].$A_param['id']);
        #Test si il est dans l'api Users
        return true;
    }

    public static function getStatus($S_id):string{
        #Test si il est admin dans l'api Users
        return "admin";
    }

    public static function create($A_param):bool{
        if ($A_param['password'] == $A_param['passwordConfirm']){
            $A_param['password'] = hash('sha512', $A_param['password'].$A_param['id']);
            #ajouter dans l'api
            return true;
        }
        return false;
    }

    public static function getAll():array{
        #tout les user
        return array(
            array("id" => "Nils", "password" => "qfqsdfqsdfqsdf"),
            array("id" => "Fred", "password" => "qfqsdqsdqsdqsf"),
            array("id" => "Luca", "password" => "qfqsdfqsdfqsdf"),
            array("id" => "Lenny", "password" => "qfqsdfqsdfqsdf"),
        );
    }

}