<?php


$sciezka_do_pliku = 'gra.txt';

// Sczytaj dane z pliku jako jeden ciąg znaków
$zawartosc = file_get_contents($sciezka_do_pliku);

// Wyświetl zawartość pliku
// echo json_encode($zawartosc);
echo $zawartosc;
// echo 'FADFSFDSFDS';

?>