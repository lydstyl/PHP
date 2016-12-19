<?php 
    class Dog{
        var $type = "Dog";
        var $name = "";
        var $food = "";
        function __construct($nom){
            $this->setName($nom);
            $this->setFood("croquette");
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