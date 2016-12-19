<?php 
    include('./dog.class.php');
    include('./cat.class.php');
    include('./rabbit.class.php');
    class Animalerie{
        var $animaux = [];
        function __construct(){
            //echo "Animalerie créée";
        }
        function setAnimal($type,$nom){
            //$spa.setAnimal("Dog","Rex");
            switch($type){
                case "Dog" :
                    $name = new Dog($nom);
                    array_push($this->animaux, $name);
                    //echo "</br>";
                    //echo "Le chien $nom est maintenant dans l'animalerie";
                    //print_r($this->animaux);
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
        function getAnimal($nom){
            if(!$nom){
                //echo "</br>getAnimal appelée sans parametre</br>";
                //echo "<pre>";
                //print_r($this->animaux);
                //echo '</pre>';
                return $this->animaux;
            }else{
                //echo "</br>";
                //echo "getAnimal appelée avec un nom en parametre</br>";
                //print_r($this->animaux[0]->getName());
                for($i=0,$il = count($this->animaux);$i<$il;$i++){
                    $animalName = $this->animaux[$i]->getName();
                    //echo "</br>";
                    //echo "nom animal : $animalName</br>";
                    if($nom == $animalName){
                        //echo "getAnimal va retourner l'animal : ";
                        //print_r($this->animaux[$i]->getName());
                        return $this->animaux[$i];
                    }
                }
            }
        }
/*        function __construct(){
            $this->stock = array(
                "argent" => 100, //
                "tomate" => 10,
                "patte" => 10,
                "gruyere" => 10,
                "champignon" => 10,
                "oeuf" => 10,
                "chorizo" => 10
            );
            echo "Création de l'objet de la classe commande ok</br></br>";
        }*/
    }
?>