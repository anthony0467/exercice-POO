<?php
class Realisateur extends Identite
{
	public function __construct($prenom, $nom, $sexe, $dateNaissance)
	{
		parent::__construct($prenom, $nom, $sexe, $dateNaissance);
	}
}
