<?php
    include("./item.class.php");
    class Catalog{
        public $itemsList = [];
        function __construct(){

        }
        function addItem($nom, $prix = false, $description = false){
            $item = new Item($nom, $prix, $description);
            array_push($this->itemsList, $item);
        }
        function giveItemsList(){
            return $this->itemsList;
        }
        function printItemsList(){
            echo "</br>Liste des items du catalogue :<pre>";
            print_r($this->itemsList);
            echo "</pre></br>";
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