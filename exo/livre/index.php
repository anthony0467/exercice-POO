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

    // AUTEUR
    $auteur1 = new Auteur('King', 'Stephen');
    // LIVRE
    $ca = new Livre('ça',1138,'1986',20, $auteur1);
    $simetierre = new Livre('Simetierre',374,'1983', 15, $auteur1);
    $fleau = new Livre('Le Fléau',823,'1978',14, $auteur1);
    $shining = new Livre('Shining',447,'1977',16, $auteur1);


    echo $auteur1->get_firstName().' ';
    echo $auteur1->get_lastName().'<br>';

    $ca->afficherBibliographie();
    $simetierre->afficherBibliographie();
    $fleau->afficherBibliographie();
    $shining->afficherBibliographie();

?>
    
</body>
</html>