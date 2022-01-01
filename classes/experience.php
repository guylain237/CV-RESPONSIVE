 <?php
require "personne.php";

abstract class Experience extends Personne
{
	
	public function __construct( $enom,  $estatut,  $eannee,  $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial, 
		public $lieu, public $période)
	{
			parent::__construct($enom, $estatut, $eannee, $eorigine, $esante,  $elieu,
		$eville, $elocalisation, $enumero,  $ereseau, $eadresse, $ereseauSocial);
	}
}


?>