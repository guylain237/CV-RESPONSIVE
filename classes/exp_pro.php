<?php
require "experience.php";

class ExpProfessionnelle extends Experience
{
	
	public function __construct( $enom,  $estatut,  $eannee,  $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $lieu,
		$periode, public $site, public $poste)
	{
			parent::__construct($enom, $estatut, $eannee, $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $lieu,
		$periode);
	}
}


?>