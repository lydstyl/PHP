<?php 
    class Pizza{
        var $ingredients;
        function __construct($nomPizza, &$stock){
            switch($nomPizza){
                case "royale":
                    echo "Création de la pizza ".$nomPizza." :</br>";
                    $this->ingredients = [7,"tomate","patte","gruyere","champignon"];
                    $stock["argent"] -= $this->ingredients[0];
                    for($i = 1;$i<count($this->ingredients);$i++){
                        echo "Déstockage de 1 unité de ".$this->ingredients[$i]."</br>";
                        $stock[$this->ingredients[$i]] --;
                    }
                    echo "</br></br>";
                    break;
            }
        }
    }
?>