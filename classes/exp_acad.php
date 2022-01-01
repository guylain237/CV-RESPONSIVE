<?php
require "experience.php";

class ExpAcademique extends Experience
{
	
	public function __construct( $enom,  $estatut,  $eannee,  $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $lieu,
		$periode, public $diplome, public $filiaire)
	{
			parent::__construct($enom, $estatut, $eannee, $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, $lieu,
		$periode);
	}
}


?>