<?php
/* há uma função no PHP para exibir a data e a hora
 * 
 */
#Exibir apenas o ano:
echo date("y");

echo '<br>';
#Exibir tudo: Dia/Mês/Ano;
echo date("d/m/y");
echo '<br>';

#Exibir tudo: Dia/Mês/Ano com ano completo;
echo date("d/m/Y");
echo '<br>';

#Exibir tudo: Dia/Mês/Ano com ano completo. "D" para dia da semana e "F" para mês adiciona o dia em formato de texto;
echo date("D/F/Y");
echo '<br>';

#Exibir tudo: Dia/Mês/Ano com ano completo. Substituindo o "d" por j, o dia éxibido sem o "0" 
#em caso de 05, por exemplo com o j é exibido o "5", e o "n" possui a mesma função para meses;
#outras funções: https://www.php.net/manual/pt_BR/function.date.php
echo date("j/n/Y");
echo '<br>';

#Hora:
date_default_timezone_set('America/Sao_Paulo');
echo date("h:i:s");
echo '<br>';
