<?php

$s = sha1("Olá");
echo $s;
echo "<br>";

$m = md5("Olá");
echo $m;
echo "<br>";

$b = base64_encode("olá");
echo $b;
echo "<br>";
echo base64_decode($b);
echo "<br>";

?>