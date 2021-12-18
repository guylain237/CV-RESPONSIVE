<?php
require "personne.php";

class Competence extends Personne
{
	
	public function __construct( $enom,  $estatut,  $eannee,  $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, 
		public $nom_comp, public $nom_domaine, public $jauge)
	{
			parent::__construct($enom, $estatut, $eannee, $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial);
	}
}


?>