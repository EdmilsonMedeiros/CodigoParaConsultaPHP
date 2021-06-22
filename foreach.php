<?php
//Foreach é utilizado para criar estrutura de repetição a partir da consulta a um arraym, por exemplo.

$arrayFrutas = ["Abacaxi", "Banana", "Cajú", "Maçã", "Uva"];

foreach ($arrayFrutas as $v){
    echo $v . "<br>";
}
echo "<br>";
//Com array associativo:
$arrayFrutas2 = [
    1=>"Abacaxi", 
    2=>"Banana", 
    3=>"Cajú", 
    4=>"Maçã", 
    4=>"Uva"];

foreach ($arrayFrutas as $key => $v){
    echo "<li>"."Key: {$key} " . "Value: ". $v . "</li>". "<br>";
}

$arrayNotas = [
    "aluno1"=>[
        "nome"=>"Gunnar",
        "nota"=> 7
    ],
        "aluno2"=>[
        "nome"=>"Lucia",
        "nota"=> 10
    ],
        "aluno3"=>[
        "nome"=>"Natalia",
        "nota"=> 0
    ]
];

foreach($arrayNotas as $aluno){
    foreach ($aluno as $chave=>$valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo '<br>';
}