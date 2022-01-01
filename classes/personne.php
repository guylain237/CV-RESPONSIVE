<?php
/*Classe de personne du CV*/

/**
 * 
 */
abstract class Personne
{
	
	public function __construct(
	    public $id,
		public $username,
	    public $nom, 
	    public $statut, 
	    public $annee, 
	    public $origine, 
		public $esante, 
		public $elieu, 
		public $eville, 
		public $elocalisation, 
		public $enumero, 
		public $ereseau, 
		public $eadresse, 
		public $ereseauSocial)
	{
	
	}
}


?>