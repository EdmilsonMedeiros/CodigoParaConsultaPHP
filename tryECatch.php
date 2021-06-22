<?php
echo 'Try and Chatch<br>';

/* Um bloco try, permite executar uma operação, se houver um erro, esse erro será tratado no bloco catch.
 * Com o catch teremos a informação detalhada do erro ou não exibil-lo no cliente.
 */

//Exemplo com erro de conexão ao BD:

function conectar(){
    //erro no username
    $dbh = new PDO('mysql:host=localhost;dbname=workspace', 'roo', '');
    $dbh;
}

try{
    conectar();
} catch (PDOException $e){
    echo "Ocorreu um erro! <br>".$e->getMessage();
};
?>