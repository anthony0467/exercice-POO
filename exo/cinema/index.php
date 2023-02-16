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
	//REALISATEUR
	$real1 = new Realisateur('James', 'Cameron', 'H', '16-08-1954');
	$real2 = new Realisateur('Christopher', 'Nolan', 'H', '18-02-1964');
	//ROLE
	$role_Dawson = new Role('Jack Dawson');
	$role_Batman = new Role('Batman');
	$role_Joker = new Role('Joker');

	//LISTE ACTEUR
	$acteur1 = new Acteur('Léonardo', 'Dicaprio', 'H', '11-11-1974');
	$acteur2 = new Acteur('Val', 'Kilmer', 'H', '31-12-1959');
	$acteur3 = new Acteur('Christian', 'Bale', 'H', '30-01-1974');
	$acteur4 = new Acteur('Ben', 'Affleck', 'H', '15-08-1972');
	$acteur5 = new Acteur('Heath', 'Ledger', 'H', '04-04-1979');
	// GENRE
	$genre1 = new Genre(' Drame romantique');
	$genre2 = new Genre('Action');
	// FILM
	$film1 = new Film('Titanic', 1997, 195, $real1, 'Il raconte l\'histoire de deux jeunes passagers du paquebot Titanic en avril 1912. L\'une, Rose, est une passagère de première classe qui tente de se suicider pour se libérer des contraintes imposées par son entourage, et le second, Jack, est un vagabond embarqué à la dernière minute en troisième classe pour retourner aux États-Unis.', $genre1);
	$film2 = new Film('Batman The dark Knight', 2008, 152, $real2, 'Ce film décrit la confrontation entre Batman, interprété pour la seconde fois par Christian Bale, et son ennemi juré le Joker', $genre2);
	$film3 = new Film('Batman The dark Knight rises', 2012, 172, $real2, 'Ce film décrit la confrontation entre Batman, interprété pour la seconde fois par Christian Bale, et son ennemi Bane', $genre2);
	$film4 = new Film('Batman v Superman', 2016, 152, $real2, 'Batman contre Superman', $genre2);
	//CASTING
	$castBatman = new Casting($acteur3, $role_Batman, $film2);
	$castBatman = new Casting($acteur5, $role_Joker, $film2);
	$castBatmanVSuperman = new Casting($acteur4, $role_Batman, $film4);

	$castBatman2 = new Casting($acteur3, $role_Batman, $film3);



	echo $real2->afficherFilmParReal(); // afficher films par realisateur
	echo $genre2->afficherFilmParGenre(); // afficher les films en fonction de leur genre
	echo $role_Batman->afficherActeurFilm(); // afficher le film et l'acteur en fonction du role
	echo $film2->afficherRoleActeur(); // Afficher les acteurs pour un role
	echo $acteur3->afficherFilmographie(); // Afficher film et role en fonction de l'acteur
	// $film1->afficherInfoFilm(); // afficher les infos d'un film


	//echo $real1->get_prenom() . "<br>";
	//echo $real1->get_nom() . "<br>";
	//echo $real1->get_sexe() . "<br>";
	//echo $real1->get_dateNaissance() . "<br>";
	//echo $acteur1->get_role() . "<br>";

	?>

</body>

</html>