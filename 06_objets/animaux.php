<?php 
    class Animal{
        var $nourriture;
        var $couleur;
        var $type;
        function jeSuis($str){
            $this->type = $str;
        }
        function couleur($str){
            $this->couleur=$str;
        }
        function nourriture($str){
            $this->nourriture = $str;
        }
    }
    class Chapeau{ //pas de parenthèse dans une classe 
        var $model;
        var $taille;
        function Model($M = ""){
            //echo $M;
            if($M == ""){
                return $this->model;
            }//else{$this->model=$M;}
            $this -> model = $M;
        }
    }
    class Chapeau2{
        var $model;
        var $taille;
        function __construct($M){
            $this->model = $M;
        }
        function Model($m=""){
             //echo $M;
            if($m == ""){
                return $this->model;
            }//else{$this->model=$M;}
            $this -> model = $m;
        }
    }
?>