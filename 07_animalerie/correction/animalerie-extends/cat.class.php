<?php 

include_once('./animal.class.php');

    class Cat extends Animal{
	
        var $type = "Cat";
		
        function __construct($nom){
            $this->setName($nom);
            $this->setFood("lait");
        }
    }
?>