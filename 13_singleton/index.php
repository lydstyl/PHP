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
    // Singleton = solution pour instancier une unique fois notre class static
    // plus besoin de Mage pour centraliser les instances

    // null --> ni true ni false par exemple --> la variable existe mais sa valeur est null --> null prend 1 octet donc mieux que la chaine "null ou pas de valeur"
    // undefined --> non definit --> la variable n'existe pas
/*    class Singleton{
        private static $_instance = null;
        private function __construct(){}*/
        /**
        * Méthode qui crée l'unique instance de la class_exists
        * si elle n'existe pas encore puis la retourne */
/*        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new Singleton();
            }
            return self::$_instance;
        }
    }

    //$oSingleton = new Singleton();
    $oSingletonA = Singleton::getInstance();
    $oSingletonB = Singleton::getInstance();

    echo '<pre>';
    var_dump($oSingletonA); // comme un print_r avec des informations en plus et n'affiche pas en mode tableau
    echo '</pre>';

    echo '<pre>';
    var_dump($oSingletonB);
    echo '</pre>';*/

    include('Color.class.php');
    include('Tableau.class.php');
    include('Str.class.php');

    echo "Stephane : <br />";
    echo Color::getInstance()->rgbToHex(12, 25, 255);
    echo "<br />";
    print_r(Color::getInstance()->hexToRgb("#F00009"));
    echo "<br />";
    print_r(Color::getInstance()->randomHex());
    echo "<br /><br />";

    echo "Gabriel et Vianney : <br />";
    print_r(Tableau::getInstance()->strToArray("coucou les amis"));
    echo "<br />";
    print_r(Tableau::getInstance()->emptyArray(10, "coucou"));
    echo "<br /><br />";

    echo "Cyril : <br />";
    print_r(Str::getInstance()->arrayToStr(["Mon", "Super", "Tableau", 4]));
    echo "<br />";
    print_r(Str::getInstance()->removeAccent("éééêï"));
    echo "<br /><br />";


  ?>
      
  </body>
  <script type="text/javascript"></script>
</html>