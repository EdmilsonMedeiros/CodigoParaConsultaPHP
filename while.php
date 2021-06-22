<?php
//while é utilizado para criar estrutura de repetição quando queremos que uma determinada ação se repita N vezes quando não se conhece o N.

//Exemplo: Exibição de contagem de 1 a 10 usando while e echo:
$num = 0;
while ($num<10){
    $num = $num + 1;
    echo $num . "<br>";
}

//OBS.: While é mais utilizado quando não se sabe quantas vezes vai ser repetida a instrução.