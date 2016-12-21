<?php
    class Commande{
        public $itemsList = [];
        public $total = 0;
        function __construct(&$catalog){
            for($i = 0; $i < count($_SESSION['panier']); $i++){
                $nomItem = $_SESSION['panier'][$i];
                $item = $this->recupererInfosItem($catalog, $nomItem);
                array_push($this->itemsList, $item);
            }
        }
        function actualiserTotal(){
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $item = $this->itemsList[$i];
                $this->total += $item->prix;
            }
        }
        function recupererInfosItem($catalog, $nomItem){
            $item = $catalog->giveItemFromName($nomItem);
            return $item;
        }
        function printItemsList(){
            echo "Votre commande contient ".count($this->itemsList)." items :<ul>";
            for($i = 0, $il = count($this->itemsList); $i < $il; $i++){
                $item = $this->itemsList[$i];
                $nom = $item->nom;            
                $prix = $item->prix;            
                $description = $item->description;  
                $num = $i + 1;        
                echo "<li>Item $num --> $nom au prix de $prix €<br/>Description : $description</li>";    
            }
            $this->actualiserTotal();
            echo "</ul>Total de la commande : $this->total €";
        }
    }
?>