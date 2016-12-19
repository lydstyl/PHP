<?php 

include_once('./animal.class.php');
    class Dog extends Animal{
	
        var $type = "Dog";

        function __construct($nom){
            $this->setName($nom);
            $this->setFood("croquette");
        }
    }
?>