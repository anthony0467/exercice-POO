<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercice cinéma</h1>

<?php

// récupérer les class des autres fichiers

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

  $real1 = new identite('James', 'Cameron', 'H', '16-08-1954');


  echo $real1->get_prenom()."<br>";
  echo $real1->get_nom()."<br>";
  echo $real1->get_sexe()."<br>";
  echo $real1->get_dateNaissance()."<br>";

?>
    
</body>
</html>