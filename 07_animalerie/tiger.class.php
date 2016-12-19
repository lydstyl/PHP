<?php 
    include_once('./animal.class.php'); // class générique
    class Tiger extends Animal{
        var $type = "Tiger";

        function __construct($nom){
            $this->setName($nom);
            $this->setFood("Gazelle");
        }
        function roar(){
            echo "</br>Rooooooooaaaaaaaarrrr";
        }
    }
?>