<?php
//do while é utilizado para criar estruturas de repetição onde é executada primeiro a 
//ação e depois é feita a verificação de determinada condição que define a continuação ou não do loop.

$i = 1;

do{
    echo "Número: {$i}" ."<br>";
    $i++;
}while ($i<=10);