<?php
//BUSCA CEP API VIACEP
$cep = "59115545";
$str = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");
echo $str."<br>";

$arrayEndereço = json_decode($str);
var_dump($arrayEndereço);
echo '<br><br>';

?>

<b>RUA: <?php echo $arrayEndereço->logradouro; ?></b><br>
<b>CIDADE: <?php echo $arrayEndereço->localidade; ?></b>
