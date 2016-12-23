<?php
    class Color{
        private static $_instance = null;
        private function __construct(){}//constructeur vide, en private !
        public static function getInstance(){
            if(is_null(self::$_instance)){self::$_instance = new Color();}
            return self::$_instance;
        }

        public function rgbToHex($red,$green,$blue){ // Valeur rgb en tableau à récup !
            $rgb=[];
            array_push($rgb,$red);
            array_push($rgb,$green);
            array_push($rgb,$blue);
            $hex = "#";
            $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
            $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
            $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);
            return $hex; // returns the hex value including the number sign (#)
        } //OK FONCTIONNE

        function hexToRgb($hex){ // valeur #c8c8c8 à recup par exemple 
            $hex = str_replace("#", "", $hex);
                if(strlen($hex) == 3) {
                    $r = hexdec(substr($hex,0,1).substr($hex,0,1));
                    $g = hexdec(substr($hex,1,1).substr($hex,1,1));
                    $b = hexdec(substr($hex,2,1).substr($hex,2,1));
                } else {
                    $r = hexdec(substr($hex,0,2));
                    $g = hexdec(substr($hex,2,2));
                    $b = hexdec(substr($hex,4,2));
                }
            $rgb = array($r, $g, $b);
            return implode(",", $rgb); // returns the rgb values separated by commas|| also://return $rgb; // returns an array with the rgb values
        } // OK FONCTIONNE 

        function randomHex(){
            $number1 = rand(0,255); $number2 = rand(0,255); $number3 = rand(0,255);
            //echo 'Conversion d\'un rgb aleatoire en hexa :';
            //echo self::rgbToHex($number1,$number2,$number3);
            return self::rgbToHex($number1,$number2,$number3);
        }
    } // FIN CLASSE COLOR
?>