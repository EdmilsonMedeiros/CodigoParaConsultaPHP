<?php

/* 
CONVERTENDO ARRAY EM JSON:
 */

$array = array("nome"=>"Edmilson", "ultimoNome"=>"Medeiros");
$convertido= json_encode($array);
echo $convertido;

