<?php
    include("./item.class.php");
    class Catalog{
        public $nom = "";
        public $itemsList = [];
        function __construct($nom){
            $this->nom = $nom;
        }
        function addItem($nom, $prix = false, $description = false){
            $item = new Item($nom, $prix, $description);
            array_push($this->itemsList, $item);
        }
        function giveItemsList(){
            return $this->itemsList;
        }
        function printItemsList(){
            echo "Articles du catalog $this->nom : <br/><ul>";
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $item = $this->itemsList[$i];
                $nom = $item->nom;
                $description = $item->description;
                $prix = $item->prix;
                echo "<li>Nom : $nom<br/> Description : $description<br/> Prix: $prix </ li>";
                echo "<br/><a target='' href='?nom=$nom'>Ajouter à la commande</a>";
            }
            echo "</ul>";
        }
        function giveItemFromName($nom){
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $name = $this->itemsList[$i]->nom;
                if($nom == $name){
                    return $this->itemsList[$i];
                }
            }
        }
    }
?>