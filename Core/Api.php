<?php

class Api{

    public static function requete($url, $S_id = null, $S_action = null){
        if (isset($S_id)){
            $url .= "/".$S_id;
        }
        $token = 'token';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (isset($S_action)){
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $S_action);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $token
        ));
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            throw new Exception('Erreur curl : ' . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }

    public static function requetePost($url, $A_data, $S_id){
        $url .= "/".$S_id;
        $token = 'token';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($A_data));
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            throw new Exception('Erreur curl : ' . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }

    public static function requeteAuthentification($S_name, $S_password){
        
        $token = 'token';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/API-Produits-et-Utilisateurs-1.0-SNAPSHOT/api/authenticate");
        curl_setopt($ch, CURLOPT_POST, 1);
        $data = array(
            'username' => $S_name,
            'password' => $S_password
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token
        ));
        
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

}