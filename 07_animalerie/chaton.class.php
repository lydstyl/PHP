<?php 
    include_once('./cat2.class.php'); // class générique
    class Chaton extends Cat2{
        //var $type = "Chaton";

        function __construct($nom){
            $this->setName($nom);
            $this->setFood("sauterelle");
        }
        function roar(){
            echo "</br>Miaouu";
        }
    }
?>