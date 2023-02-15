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


	//$client_test = new Bank('Livret A', 1000, 'Euro', 'test');

	$titulaire1 = new Titulaire('Doe', 'John', "1980-10-05", 'strasbourg');

	$livretA = new Bank("LivretA", 566, "€", $titulaire1);
	$compteCourant = new Bank("CompteCourant", 777, "€", $titulaire1);

	//echo $client_test;
	$titulaire1->afficherInfo();
	// $livretA-> afficherInfos();

	echo $compteCourant->debit(50) . '<br>';
	echo $compteCourant->debit(50) . '<br>';
	echo $compteCourant->debit(150) . '<br>';

	echo "Solde =" . $compteCourant->get_solde() . '<br>';

	echo $compteCourant->credit(50) . '<br>';
	echo $compteCourant->credit(50) . '<br>';
	echo $compteCourant->credit(150) . '<br>';
	echo $compteCourant->get_solde() . '<br>';

	echo $compteCourant->virement($livretA, 150);

	?>

</body>

</html>