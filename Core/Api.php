<?php

class Api{

    public static function requete($S_requete, $A_data = null){

        $url = 'https://example.com/api/$S_requete';

        if (isset($A_data)){
            foreach($A_data as $data){
                $url .= "/".$data; 
            }
        }

        $token = 'votre_token_bearer';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
}