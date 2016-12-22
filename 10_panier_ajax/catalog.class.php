<?php
    include("./item.class.php");
    class Catalog{
        public $nom = "";
        public $itemsList = [];
        function __construct($nom){
            $this->nom = $nom;
        }
        function addItem($nom, $prix = 9, $description = "coco"){
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
                echo "<li>Nom : $item->nom<br/>Description : $item->description<br/>";
                echo "<div data-nom='$item->nom'>AJOUTER VIA AJAX</div>";
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