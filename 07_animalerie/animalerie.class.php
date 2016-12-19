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
                    $animal = new Dog($nom);
                    break;
                case "Cat" :
                    $animal = new Cat($nom);         
                    break;
                case "Rabbit" :
                    $animal = new Rabbit($nom);              
                    break;
                default:
                    echo "L'animal ".$type." est inconnu, impossible de le créer";
            }
            if($type == "Dog" || $type == "Cat" || $type == "Rabbit"){
                array_push($this->animaux, $animal);                
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