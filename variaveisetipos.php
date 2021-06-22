<?php
$ed = "Edmilson";
//getType retorna o tipo de variável. 
echo getType("Meu nome é {$ed}");
//Teste:
echo '<br>';
$num = 50.05;
//Retornou String:
echo gettype("Número {$num}");
echo '<br>';
//Retornou númerico double:
echo gettype($num);
echo '<br>';
//Retornou númerico inteiro:
$num2 = 20;
echo gettype($num2);
echo '<br>';
//Retornou boolean:
$boolean = true;
echo gettype($boolean);

/*OBS.: PHP 
 * é uma linguagem fracamente tipada
 */
?>
