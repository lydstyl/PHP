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
      <h1>Objets</h1>
      <?php 
        include("animaux.php");
        $troll = new Animal();
        $troll -> jeSuis("troll");
        $troll -> couleur("vert");
        $troll -> nourriture("gens");

        //echo 'Je suis un '.($troll -> type).' de couleur '.($troll -> couleur).' et je mange des '.($troll -> nourriture).' !';
        echo '<br />';

        $casquette = new Chapeau();
        echo "\n\r";
        $casquette -> Model("abc"); //$M prend cette valeur
        //echo $casquette -> Model(); // équivaut à chaine vide ""
        
        $hat = new Chapeau2("noir"); // les () appellent le constructeur
        //$hat->Model();
        echo $hat->model();
        //echo "ococococo";
        echo ini_get("memory_limit");
      ?>
  </body>
  <script type="text/javascript"></script>
</html>