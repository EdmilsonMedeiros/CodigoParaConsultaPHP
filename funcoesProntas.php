<?php

/*O PHP possui diversas funções/bibliotecas prontas para otimizar o processo de
 *  programação evitando a reinvenção da roda a cada linha de código*/
#Exemplos:
$nome = "Edmilson Medeiros";

/* com substr é possível definir quantos caracteres de um objeto String e a partir de qual você deseja exibir*/
echo substr($nome, 0, 8);
echo '<br>';

/* com strtolower e strtoupper é possível definir um objeto string como maiusculo ou minusculo 
 * independentemente de como ele está armazenado na memoria*/

#Exemplos:
echo strtolower($nome);
echo '<br>';
echo strtoupper($nome);
echo '<br>';
/* com str_replace conseguimos substituir valores contidos em uma string. 
 * Com o str_ireplace conseguimos executar a mesma tarefa ignorando os caracteres maiusculos ou minusculos*/

#Exemplos:
$comida = "Banana, Maçã, Pera, Uva";
echo $comida;
$alt = str_replace("Banana", "Laranja", $comida);
echo '<br>';
echo $alt;
echo '<br>';

/* explode adicionar a String em um array com base em uma ocorrência, no caso a baixo a String é dividida baseada no espaço
 */
#Exemplos:
$ex = explode(" ", $nome);
echo $ex[1];
echo '<br>';
/* strlen verifica o tamanho da String
 * 
 */
#Exemplos:
echo strlen($nome);