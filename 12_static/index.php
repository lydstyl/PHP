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
        //include("class.php");
        class Statique {
            static $maVar = "Ok";
            function __construct($text){
                self::$maVar = $text;
            }
            static function test(){
                /*echo self::$maVar; // ne pas utiliser $this (car on ne va pas instancier cette classe avec new)*/
                echo self::$maVar;
            }
        }
/*        $s = new Statique();
        $s->test();
        
        
        Statique::test("coco");
        //Statique::maVar;
        */

        $class = new Statique("mon texte");
        $class2 = new Statique("2222255");
        //echo statique::test();
        echo $class::test();
        echo Statique::test();

        // Singleton = solution pour instancier une unique fois notre class static

        
      ?>
  </body>
  <script type="text/javascript"></script>
</html>