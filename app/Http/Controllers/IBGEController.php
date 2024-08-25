<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IBGEController extends Controller
{
    public function getByUf($uf)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "http://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/municipios");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "accept: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        $data = view('ajax.cidades-select', ['cidades' => $response]);
        return $data;
    }
}