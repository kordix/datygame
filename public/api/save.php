<?php

// echo json_encode(file_get_contents('php://input'));

$json =  file_get_contents('php://input');

file_put_contents('gra.txt',$json);

//print_r(json_decode(file_get_contents('php://input')));


// $pdo = new PDO('mysql:host=localhost;dbname=daty','root','');

// $query = "INSERT INTO games (jsongame) values ($jsontext)";
// echo $query;
// $sth = $pdo->prepare("INSERT INTO games (jsongame) values ($jsontext)");

// $sth->execute();


?>