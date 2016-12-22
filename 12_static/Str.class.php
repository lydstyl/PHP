<?php
        class Str{
            function majuscule($string){return strtoupper($string);}
            function minuscule($string){return strtolower($string);}
            function firstMaj($string){return ucwords(strtolower($string)); }
            function replaceAccent($str){
            $str = htmlentities($str, ENT_COMPAT, "UTF-8"); // Convertit tous les caractères éligibles en entités HTML
            $str = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/','$1',$str);//Analyse tout les élements $Str qui commance par /&
            return html_entity_decode($str); // Convertit toutes les entités HTML en caractères normaux
            }
        }
?>