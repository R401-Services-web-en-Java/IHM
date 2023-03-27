<?php
/*
CREATE TABLE USERS (
   mail VARCHAR(100),
   username VARCHAR(100) NOT NULL PRIMARY KEY,
   password VARCHAR(400) NOT NULL,
   firstname VARCHAR(100),
   lastname VARCHAR(100),
   role ENUM('admin', 'user') NOT NULL
);
*/
final class Users{

    const URL           = 'https://example.com/api/users/';

    public static function isUser($A_param):bool{
        $A_param['password'] = hash('sha512', $A_param['password'].$A_param['id']);
        #Test si il est dans l'api Users
        /*
        $A_user = Api::requete(self::URL."getOne", $A_param);
        */
        $A_user = array("id" => "Nils", "password" => "qfqsdfqsdfqsdf", "status"=>"admin");
        if($A_user){

            return true;
        }
        return false;
    }

    public static function getStatus($S_id):string{
        /*
        $A_user = Api::requete(self::URL."getOne", array($S_id));
        */
        $A_user = array("id" => "Nils", "password" => "qfqsdfqsdfqsdf", "status"=>"admin");
        return $A_user['status'];
    }

    public static function create($A_param):bool{
        if ($A_param['password'] == $A_param['passwordConfirm']){
            $A_param['password'] = hash('sha512', $A_param['password'].$A_param['id']);
            #ajouter dans l'api
            /*
                $A_user = Api::requete(self::URL."add", $A_param);
            */
            return true;
        }
        return false;
    }

    public static function getAll():array{
        #tout les user
        /*
        retrun = $A_user = Api::requete(self::URL."getAll");
        */
        return array(
            array("id" => "Nils", "password" => "qfqsdfqsdfqsdf", "status"=>"admin"),
            array("id" => "Fred", "password" => "qfqsdqsdqsdqsf", "status"=>"user"),
            array("id" => "Luca", "password" => "qfqsdfqsdfqsdf", "status"=>"admin"),
            array("id" => "Lenny", "password" => "qfqsdfqsdfqsdf", "status"=>"user"),
        );
    }

    public static function getOne($S_id){
        return array("id" => "Nils", "password" => "qfqsdfqsdfqsdf", "status"=>"admin");
        /*
        return = Api::requete(self::URL."getOne", array($S_id));
        */
    }

    public static function delete($S_id){
        /*
        return Api::requete(self::URL."getOne/", array($S_id));
        */  
        }

    public static function update($A_data){
        /*
        return Api::requete(self::URL."getOne/", $A_data);
        */  
    }

    public static function add($A_data){
        /*
        return Api::requete(self::URL."getOne/", $A_data);
        */  
    }
}
