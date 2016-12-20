<?php
    class Commande{
        public $itemsList = [];
        public $total = 0;
        function __construct($objetItem = false){
            if(!$objetItem){
                $this->ajouterItemDansSession(); // on reprend les infos de session
            }else{
                $this->addItem($objetItem);
            }
        }
        function ajouterItemDansSession(){
            // 
            //$_SESSION['panier']
        }
        function addItem($objetItem){
            array_push($this->itemsList,$objetItem);
            //print_r($objetItem->nom);
            $nomItem = $objetItem->nom;
            array_push($_SESSION['panier'], $nomItem);
        }
        function giveItemsList(){
            return $this->itemsList;
        }
        function printItemsList(){
            echo "</br>Liste des items de la commande :<pre>";
            print_r($this->itemsList);
            echo "</pre></br>";            
        }
        function actualiserTotal(){
            $this->total = 0;
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $prixItem = $this->itemsList[$i]->prix;
                $this->total += $prixItem;
            }
        }
        function giveTotal(){
            $this->actualiserTotal();
            return $this->total;
        }
        function printTotal(){
            $this->actualiserTotal();
            echo "Total = ".$this->total." €";
        }
        function printCommande(){
            echo "<h2>Votre commande vaut ".$this->giveTotal()." € et contient :</h2><ul>";
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $nomItem = $this->itemsList[$i]->nom;
                $prixItem = $this->itemsList[$i]->prix;
                $descriptionItem = $this->itemsList[$i]->description;
                echo "
                    <li>
                        Un $nomItem d'une valeur de 
                        $prixItem €. Description : 
                        $descriptionItem
                    </li>";
            }
            echo "</ul>";
        }
    }
?>