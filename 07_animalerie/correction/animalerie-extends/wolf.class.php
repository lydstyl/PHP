<?php 

include_once('./animal.class.php');

    class Wolf extends Animal{
	
        var $type = "Wolf";
		
        function __construct($nom){
            $this->setName($nom);
            $this->setFood("brebis");
			echo $this->papatte;
			
        }
    }
?>