<?php 
    class Animal{
        var $name = "";
        var $food = "";
        function __construct($nom){
            $this->setName($nom);
        }
        function setName($nom){
            $this->name = $nom;
        }
        function getName(){
            return $this->name;
        }
        function setFood($food){
            $this->food = $food;
        }
        function getFood(){
            return $this->food;
        }
    }
?>