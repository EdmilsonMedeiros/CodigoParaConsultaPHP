<?php
/* Há funções para ler e gravar informações. É recomendavel sempre fechar o arquivo após gravar uma informação.
 * 
 */
#Escrita:
function Gravar (string $texto, string $arquivo) {
    $mode = "a+";
    $fp = fopen($arquivo, $mode);
    fwrite($fp, $texto);
    fclose($fp);
}
Gravar("Gravação 2 "."<br>"."\n", "file.txt");
#Leitura:
function Ler (string $arquivo) {
    $mode = "r+";
    $fp = fopen($arquivo, $mode);
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}
echo Ler("file.txt");
