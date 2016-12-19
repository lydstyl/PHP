<?php 
    class Dog{
        var $type = "Dog";
        var $name = "";
        var $food = "";
        function __construct($nom){
            $this->setName($nom);
            $this->setFood("croquette");
            //echo "</br>";
            //echo "Chien $nom créé";
        }
        function setName($nom){
            $this->name = $nom;
        }
        function getName(){
            //echo "</br>";
            //echo "getName appelé";
            //echo "</br>";
            return $this->name;
        }
        function setFood($food){
            $this->food = $food;
            //echo"setFoo $food";
        }
        function getFood(){
            //echo $this->food;
            return $this->food;
        }
    }
?>