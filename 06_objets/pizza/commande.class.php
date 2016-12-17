<?php 
    class Commande{
        var $stock = array();
        var $commande = array();
        var $numCommande = 0;
        function __construct(){
            $this->stock = array(
                "argent" => 100, //
                "tomate" => 10,
                "patte" => 10,
                "gruyere" => 10,
                "champignon" => 10,
                "oeuf" => 10,
                "chorizo" => 10
            );
            echo "Création de l'objet de la classe commande ok</br></br>";
        }
        function afficherStock(){
            echo "Etat du stock :</br>";
            print_r($this->stock);
            echo "</br></br>";
        }
        function nouvelle($nomPizza){
            $this->numCommande ++;
            echo "Nouvelle commande numéro $this->numCommande de $nomPizza</br></br>";
            $nouvelleCommande = new Pizza($nomPizza, $this->stock);
            $this->commande[$this->numCommande] = "coco";
        }
/*        function mettreAjorStock($ing, $qte){
            if(isset($this->stock[$ing])) $this->stock[$ing] = 0;
            $this->stock[$ing] += $qte;
        }*/
    }
?>