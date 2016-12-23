<?php
    class Str{

        private static $_instance = null;

        private function __construct(){

        }
        // Méthode qui créé l'unique instance de la classe si elle n'existe pas encore puis la retourne
        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new Str();
            }
            return self::$_instance;
        }

        public function arrayToStr($array){
            for($i=0,$il=count($array),$stri='';$i<$il;$i++){
                if($i==0){
                    $stri = strval($array[$i]);
                }else{
                 $stri.=' '.strval($array[$i]);
                }
            }
            return $stri;
        }

        public static function removeAccent($str, $encoding='utf-8') {
            $str = htmlentities($str, ENT_NOQUOTES, $encoding);
            $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);
            $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
            $str = preg_replace('#&[^;]+;#', '', $str);
            return $str;
        }
    }
?>