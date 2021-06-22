<?php

/* get é um array associativo que retorna informações de uma página semelhantemente ao post.
 */
#Exemplos:

?>
<form method="GET">
    <input type="txt" value="Edmilson" name="nome"/>
    <input type="submit" value="Exibir">
</form>
<?php
    if(isset($_GET["nome"])){
            $nome = $_GET["nome"];
            echo $nome;
    }
    
    /*O GET retorna os valores via URL, e é possível defini-los direto no próprio, adicionando por exemplo: ?nome=Edmilson*/
?>

