<?php
/* if e else são operadores condicionais. Os operadores condicionais servem para criar uma estrutura de decisão onde uma 
ação será executada baseada em uma condição especifica.
*/
//Exemplos:
$idade_usuario = 20;
$idade_usuario2 = 15;

if($idade_usuario >= 18){
    echo 'Bem vindo!';
}else{
    echo 'Não permitido para menores';
}
echo '<br>';
if($idade_usuario2 > 18){
    echo 'Bem vindo!';
}else{
    echo 'Não permitido para menores';
}