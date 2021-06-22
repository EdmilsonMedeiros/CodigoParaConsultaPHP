<?php
/* switch funciona semelhantementa ao if sendo utilizado também para criar uma estrutura de decisão onde uma 
ação será executada baseada em uma condição especifica.*/

$dia = 3;

switch ($dia){
    case 1:
        echo 'Dia 1';
        break;
    case 2:
        echo 'Dia 2';
        break;
    case 3:
        echo 'Dia 3';
        break;
    case 4:
        echo 'Dia 4';
        break;
    case 5:
        echo 'Dia 5';
        break;
    default : 
        echo 'Não encontrado';
        break;
    
}