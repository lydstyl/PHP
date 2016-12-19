<?php 
    include('./dog.class.php');
    include('./cat.class.php');
    include('./rabbit.class.php');

    class Animalerie{
        var $animaux = [];
		
        function __construct(){
		
        }
		
        function setAnimal($type,$nom){
            switch($type){
                case "Dog" :
                    $name = new Dog($nom);
                    array_push($this->animaux, $name);
                    break;
                case "Cat" :
                    $name = new Cat($nom);
                    array_push($this->animaux, $name);                
                    break;
                case "Rabbit" :
                    $name = new Rabbit($nom);
                    array_push($this->animaux, $name);                
                    break;
            }
        }
		
        function getAnimal($nom = false){
            if(!$nom){
                return $this->animaux;
            }else{
                for($i=0,$il = count($this->animaux);$i<$il;$i++){
                    $animalName = $this->animaux[$i]->getName();
                    if($nom == $animalName){
                        return $this->animaux[$i];
                    }
                }
            }
        }
    }
?>