<?php
/* 
CONVERTENDO JSON PARA ARRAY:
 */
$jsonStr='{"nome":"Edmilson","ultimoNome":"Medeiros"}';
$jsonConvertido= json_decode($jsonStr);
var_dump($jsonConvertido);

//ACESSANDO ARRAY:
echo "<br>".$jsonConvertido->nome." ".$jsonConvertido->ultimoNome;