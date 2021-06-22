<?php

function criar(){
    setcookie("nome", "COOKIE");
    echo filter_input(INPUT_COOKIE, "nome");
    
}
criar();

?>