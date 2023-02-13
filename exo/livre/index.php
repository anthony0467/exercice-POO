<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercice Livres</h1>

<?php

// récupérer les class des autres fichiers

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });


    $auteur1 = new Auteur('King', 'Stephen');

    echo $auteur1->get_firstName().' ';
    echo $auteur1->get_lastName().' ';

?>
    
</body>
</html>