<?php

namespace App\Api;

class ApiFeegow
{

    public static function getSpecialists(){
        return ApiFeegow::consumeApi('specialties/list');
    }

    public static function getProfessionals($speciality_id){
        return ApiFeegow::consumeApi('professional/list', $speciality_id);
    }

    public static function getPacientsListSource(){
        return ApiFeegow::consumeApi('patient/list-sources');
    }

    public static function consumeApi($route, $param = null){
        $param = "ativo=1" . $param ? 'especialidade_id=' . $param : '';

        $url = 'https://api.feegow.com.br/api/' . $route . '?' . $param;

        $ch = curl_init($url);
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("x-access-token:" . $token));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

}
