<?php
class Pizza
{
	var $nom = '';
	var $prix = 0;
	var $ingredient = [];
	
	function __construct($nom, $prix, $ingredient){
		$this->nom = $nom;
		$this->prix = $prix;
		$this->ingredient = $ingredient;
	}
}
?>