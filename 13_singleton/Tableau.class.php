<?php
    class Tableau {
        private static $_instance = null;
        private function __construct(){}
        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new Tableau();
            }
            return self::$_instance;
        }
        public function strToArray($string){
            return explode(" ", $string);
        }
        public function emptyArray($nb, $strParDefaut){
            $array = [];
            for($i = 0; $i < $nb; $i++){
                $array[] = $strParDefaut;
            }
            return $array;
        }
    }
?>