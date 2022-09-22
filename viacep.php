<?php

function getAdress()
{
    
    if (isset($_POST['cep'])) {
        $cep = $_POST['cep'];


        $cep = filterCep($cep);



        if (isCep($cep)) {

            $address = getAddressViaCep($cep);
           // var_dump($address);
           if(property_exists($address,'erro')){
            $address = addressEmpty();
            $address->cep = 'CEP não Encontrado';
           }
        } else {
            $address = addressEmpty();
            $address->cep = 'CEP Inválido';
        }
    }else{
        $address = addressEmpty();
    }
    return $address;
}

function getAddressViaCep(String $cep)
{

    $url = "https://viacep.com.br/ws/{$cep}/json/";
    //transformar a variável em obj
    return json_decode(file_get_contents($url));
}

function isCep(String $cep): bool
{
    //verificando se o cep é válido Usando expressão regular.
    return preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep);
}
function filterCep(String $cep): String
{
    //limpar caracteres indesejados no input cep Usando expressão regular
    return preg_replace('/[^0-9]/', '', $cep);
}

function addressEmpty(){
    return (object)[
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''
    ];

}
