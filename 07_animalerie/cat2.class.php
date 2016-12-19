<?php 
    include_once('./animal.class.php'); // class générique
    class Cat2 extends Animal{
        //public php5 = var de php4, private, protected
        var $type = "Cat";

        function __construct($nom){
            //$this->setName($nom);

            parent::__construct($nom); //ou
            //parent::setName($nom);

            //$this->donneNom($nom);
            $this->setFood("lait");
        }
        function donneNom($nom){
            echo "</br>set name de chat";
            parent::setName($nom); //appelle la fonction parent
            //$this->name = $nom;
        }
    }
    // final class Cat2 extends Animal{ pour empécher l'héritage
?>