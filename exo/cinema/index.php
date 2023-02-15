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

	$real1 = new Realisateur('James', 'Cameron', 'H', '16-08-1954');

	$acteur1 = new Acteur('Léonardo', 'Dicaprio', 'H', '11-11-1974', 'Jack Dawson');

	$film1 = new Film('Titanic', '1997', '195', $real1, 'Il raconte l\'histoire de deux jeunes passagers du paquebot Titanic en avril 1912. L\'une, Rose, est une passagère de première classe qui tente de se suicider pour se libérer des contraintes imposées par son entourage, et le second, Jack, est un vagabond embarqué à la dernière minute en troisième classe pour retourner aux États-Unis.', 'Drame romantique');


	$film1->afficherInfoFilm();


	//echo $real1->get_prenom() . "<br>";
	//echo $real1->get_nom() . "<br>";
	//echo $real1->get_sexe() . "<br>";
	//echo $real1->get_dateNaissance() . "<br>";
	//echo $acteur1->get_role() . "<br>";

	?>

</body>

</html>