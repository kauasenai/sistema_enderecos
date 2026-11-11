<?php 
function buscarCep($cep){
    $data = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"),true);

    return $data;
}

?>