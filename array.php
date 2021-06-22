<?php
//Array é uma estrutura capas de armazenar vários valores.
//O array suporta todos os tipos de dados. 

//Exemplos:
$nomes = array("lene", "milson" , "Alzy",  "Ed");
echo $nomes[3] . $nomes[1] . "<br>";

echo '<br>';
$nomesArray = ["lene", "milson" , "Alzy",  "Ed"];

for($i=0; $i<4; $i++){
    echo $nomesArray[$i] . "<br>";
}
echo '<br>';
echo '<br>';

//For com cout no array:
for($i=0; $i< count($nomesArray); $i++){
    echo $nomesArray[$i] . "<br>";
}
echo '<br>';
echo '<br>';
//Array associativo:
$aluno = array (
    "aluno1" => 0,
    "aluno2" => 1,
    "aluno4" => 2,
    "aluno3" => 3,
    "aluno5" => 4
);
echo $aluno["aluno1"];

echo '<br>';
echo '<br>';