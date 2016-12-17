<?php
include('pizza.class.php');
	
class Cmd {
	
	var $choix = [];
	var $commande = [];
	var $ingredients = [];

	function stock($produit = false){
		if(!$produit){
			echo '<pre>STOCK : ';
			print_r($this->ingredients);
			echo '</pre>';
		}else{
			foreach($produit as $ing => $qte){
				if(!isset($this->ingredients[$ing])) $this->ingredients[$ing] = 0;
				$this->ingredients[$ing] += $qte;
			}
		}
	}
	
	function pizzaCreate($nom, $prix, $ingredient){
		$this->choix[$nom] = new Pizza($nom, $prix, $ingredient);
	}
	
	function pizzaBuy($nom){
		$pizza = $this->choix[$nom];
		foreach($pizza->ingredient as $ingredient){
			$this->ingredients[$ingredient]--;
		}
		$this->commande[] = $pizza;
	}

	function view(){
		echo '<pre>CHOIX : ';
		print_r($this->choix);
		echo '</pre>';
		echo '<pre>CMD : ';
		print_r($this->commande);
		echo '</pre>';
		echo '<pre>STOCK : ';
		print_r($this->ingredients);
		echo '</pre>';
		for($i=0,$total = 0; $i<count($this->commande); $i++) $total += $this->commande[$i]->prix;
		echo 'TOTAL CAISSE : '.$total.'€';
	}
}
?>