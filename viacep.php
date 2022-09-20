<?php

$address = (object)[
    'cep' => '',
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => ''
];

if(isset ($_POST['cep'])){
$cep = $_POST['cep'];

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
}
?>