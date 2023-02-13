<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercice Banque</h1>

<?php

// récupérer les class des autres fichiers

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });
require('Bank.php');

//$client_test = new Bank('Livret A', 1000, 'Euro', 'test');

$client_test = new Titulaire('Doe', 'John', "15-10-1980", 'strasbourg');

$livretA = new Bank ("LivretA", 566, "€", $client_test);

//echo $client_test;
$client_test-> infoBank();
$livretA-> afficherInfos();




?>
    
</body>
</html>