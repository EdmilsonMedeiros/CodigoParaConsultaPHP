<?php
/* O POST é um Array associativo que obtem informações de uma página. 
 * É frequentemente utilizado para retornar informações de um formulário HTML.
 */
#Exemplos:
?>
<html lang="pt-br">
    <meta charset="UTF-8"/>
    <form method="POST">
        <ul>
            <li>Nome: <input type="txt" name="txtNome"></li>
            <li>Nome: <input type="txt" name="txtEmail"></li>
                    <li>Funcionários: <select name="slFuncionario">
                
                            <option value="value">text</option>
                            <option value="value">text</option>
                </select></li>
        </ul>
        <input type="submit" value="Enviar"/>
    </form>
</html>

<?php
    if(isset($_POST["txtNome"])){
    $nome = $_POST["txtNome"];
    echo '<br>';
    echo $nome;
    }

    if(isset($_POST["txtEmail"])){
        $email = $_POST["txtEmail"];
        echo '<br>';
        echo $email;
    }
?>