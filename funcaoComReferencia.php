<?php
/* 
    funcaoComReferencia passa-se uma variável dentro da função e é possível alterar o seu valor. Usa-se o & para indicar.
 */

$salario = 1567.76;
$valorAjuste = 0;

function AjustarSalario($sal, &$valorAjuste){
    $valorAjuste = 300;
    return $sal + $valorAjuste;
    
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de: {$valorFinal}, com aumento de: {$valorAjuste}";