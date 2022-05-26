<?php

namespace App\WebService;

class ViaCEP {

  /**
   * Método responsável por consultar um CEP no ViáVel
   * @param string $cep
   * @return array 
   */ 
  public static function consultarCEP($cep){
    //INICIA O CURL 
    $curl = curl_init();

    //CONFIGURAÇÕES DO CURL 
    curl_setopt_array($curl,[
      CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
      CURLOPT_RETURNTRANSFER => true,          
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

  //RESPONDE
  $response = curl_exec($curl);

  //FECHA A CONEXÃO ABERTA 
  curl_close($curl);

  print_r($response);
  }

}
