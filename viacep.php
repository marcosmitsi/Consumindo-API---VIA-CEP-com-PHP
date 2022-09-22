<?php

$address = (object)[
    'cep' => '',
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => ''
];

if (isset($_POST['cep'])) {
    $cep = $_POST['cep'];

    //limpar caracteres indesejados no input cep Usando expressão regular
    $cep = preg_replace('/[^0-9]/', '', $cep);

    //verificando se o cep é válido Usando expressão regular.

    if (preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep)) {

        $url = "https://viacep.com.br/ws/{$cep}/json/";


        //variável traz os dados como string
        /*
        $address = file_get_contents($url);
        */

        //transformar a variável em array associativo
        /*
        $address = json_decode(file_get_contents($url), true);
        */

        //transformar a variável em obj
        $address = json_decode(file_get_contents($url));

        /*
        echo '<pre>';
        var_dump($address);
        echo '</pre>';
        */
    } else {
        $address->cep = 'CEP Inválido';
    }
}
