<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!--link href="css/normalize.css" rel="stylesheet" type="text/css" /-->
    <!--link href="css/grille.css" rel="stylesheet" type="text/css" /-->
    <!--link href="css/style.css" rel="stylesheet" type="text/css" /-->
    <style>
        
    </style>
  <!--		<script type="text/javascript" src="js/jquery.js"></script>-->
  </head>
  <body>
      <?php
/*        class Str{
            function majuscule($string){return strtoupper($string);}
            function minuscule($string){return strtolower($string);}
            function firstMaj($string){return ucwords(strtolower($string)); }
            function replaceAccent($str){
            $str = htmlentities($str, ENT_COMPAT, "UTF-8"); // Convertit tous les caractères éligibles en entités HTML
            $str = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/','$1',$str);//Analyse tout les élements $Str qui commance par /&
            return html_entity_decode($str); // Convertit toutes les entités HTML en caractères normaux
            }
        }

        class Math{
            function multiply($a,$b){return($a*$b);}
            function addition($a,$b){return($a+$b);}
            function soustract($a,$b){return($a-$b);}
            function division($a,$b){return($a/$b);}
        }*/

/*        class Mage{
            static function get($quoi){
                switch($quoi){
                    case 'Str': return new Str(); break;
                    case 'Math' : return new Math(); break;
                }
            }
        }*/

        //fonctionnement de Magento et Zend en gros
/*        class Mage{
            static function get($quoi){
                include_once($quoi.'.class.php');
                return new $quoi();
            }
        }*/
        class Mage{
            static $instance = [];
            static function get($quoi){
                include_once($quoi.'.class.php');
                if(!isset(self::$instance[$quoi])){
                    self::$instance[$quoi] = new $quoi();
                }
                return new $quoi();
            }
        }

        echo Mage::get('Str')->majuscule('test');
        echo Mage::get('Math')->addition(10,20);

      ?>
  </body>
  <script type="text/javascript"></script>
</html>