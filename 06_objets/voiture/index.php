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
      <h1>Voiture</h1>
      <div>
        <?php 
          include("roue.class.php");
          include("voiture.class.php");
          $ferrari = new Voiture("michelin","2.2",);
          //$ferrari = new Voiture("michelin","2.2","26");
          //$ferrari->changer_roues_avant("jojoMarque", "2.1","25");

          echo $ferrari->roueVG->taille;

        ?>
      </div>
  </body>
  <script type="text/javascript"></script>
</html>