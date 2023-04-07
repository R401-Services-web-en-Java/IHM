<?php
/*
CREATE TABLE USERS (
   mail VARCHAR(100),
   name VARCHAR(100) NOT NULL PRIMARY KEY,
   password VARCHAR(400) NOT NULL,
   firstname VARCHAR(100),
   lastname VARCHAR(100),
   role ENUM('admin', 'user') NOT NULL
);
*/
final class Users{

    const URL           = 'http://localhost:8080/API-Produits-et-Utilisateurs-1.0-SNAPSHOT/api/users';

    public static function isUser($A_param):bool{
        $A_user = Api::requeteAuthentification($A_param['username'], $A_param['password']);
        if($A_user){
            return true;
        }
        return false;
    }

    public static function getStatus($S_id):string{
        $A_user = Api::requete(self::URL, $S_id);
        return $A_user['role'];
    }

    public static function create($A_param):bool{
        if ($A_param['password'] == $A_param['passwordConfirm']){
            $A_param['role'] = "user";
            Api::requetePostAdd(self::URL, $A_param);
            return true;
        }
        return false;
    }

    public static function getAll(){
        return Api::requete(self::URL);
    }

    public static function getOne($S_id){
        return Api::requete(self::URL, $S_id);
    }

    public static function delete($S_id){
        return Api::requete(self::URL, $S_id, "DELETE");
    }

    public static function update($A_data){
        return Api::requetePost(self::URL, $A_data, $A_data["username"]);
    }

    public static function add($A_data){
        Api::requete(self::URL, $A_data, "POST"); 
    }
}
