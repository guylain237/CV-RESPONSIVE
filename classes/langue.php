<?php
require "competence.php";

abstract class Langue extends Competence
{
	
	public function __construct( $enom,  $estatut,  $eannee,  $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $nom_comp,
		$nom_domaine, $jauge, public $nom_lang)
	{
			parent::__construct($enom, $estatut, $eannee, $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $nom_comp,
		$nom_domaine, $jauge);
	}
}


?>