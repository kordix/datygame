<?php

$sciezka_do_pliku = 'gra.txt';

$zawartosc = file_get_contents($sciezka_do_pliku);

echo $zawartosc;


?>