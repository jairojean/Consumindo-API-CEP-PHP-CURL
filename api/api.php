<?php 
  class Localizacao{





function buscaCep($cep){

$url = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

$response = curl_exec($ch);

return $resp = json_decode($response);
}


}
?>