<?php 

include_once('./animal.class.php');
    class Rabbit extends Animal{
	
        var $type = "Rabbit";

        function __construct($nom){
            $this->setName($nom);
            $this->setFood("carrote");
        }
    }
?>