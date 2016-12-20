<?php
    class Item{
        public $nom;
        public $prix = 0;
        public $description;
        function __construct($nom, $prix = 10, $description = False){
            $this->nom = $nom;
            $this->prix = $prix;
            if(!$description){
                $this->description = "Superbe item !";
            }else{
                $this->description = $description;
            }
        }
    }
?>