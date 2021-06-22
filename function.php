<?php
//Funções são blocos de instruções utilizados para pegar/retornar valores ou executar ações.
//Exemplo:
/*
function ola(){
    echo 'Olá, mundo!';
}
ola();
echo '<br>';
 */

//Com parametros:
function ola($nome, $email){
    return "Meu nome é {$nome} e meu e-mail {$email}";
}

$v = ola("Edmilson", "edmilsonnmedeiros@gmail.com");
echo $v;