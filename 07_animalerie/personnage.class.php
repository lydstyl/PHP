<?php 
    class Personnage {
        Private $nom; // on force à utiliser setNom et getNom

        function setNom($nom){
            // ici on peut vérifier le nom avec une regex par exemple
            $this->nom = $nom;
        }
        function getNom(){
            echo '</br>';
            return $this->nom;
        }
    }
?>