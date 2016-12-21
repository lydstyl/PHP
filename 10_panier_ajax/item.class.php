<?php
    class Item{
        public $nom = "";
        public $prix = 0;
        public $description;
        function __construct($nom, $prix, $description){
            $this->nom = $nom;
            $this->prix = $prix;
            $this->description = $description;
        }
    }
?>