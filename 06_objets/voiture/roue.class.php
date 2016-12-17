<?php 
    class Roue{
        var $marque;
        var $pression;
        var $taille;
        function __construct($m,$p,$t="140 pouces"){
            $this->marque = $m;
            $this->pression = $p;
            $this->taille = $t;
            echo "nouvelle roue crée</br>";
        }
    }
?>