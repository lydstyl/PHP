<?php
class Chapeau {
	/* declaration variable */
	var $_model;
	var $_taille;
	/* Constructeur de la class, recupere les parametres de classe */
	function __construct($m, $t){
		$this->_model = $m; // met a jour la var model
		$this->_taille = $t; // met a jour la var taille
	}
	/* fonction qui met a jour le model ou recupere la valeur */
	function Model($m = false){
	   // si pas de parametre definie ou retourne la valeur
	   if($m==false) return $this->_model;
	   // si on a défine un parametre on le met a jour
	   $this->_model = $m;
	}
}
// Initialise la class chapeau avec un model et une taille
$chapeau = new Chapeau('noir', '42');
// recupere le model de chapeau et l'affiche
echo $chapeau->Model();
?>