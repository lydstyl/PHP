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
      <h1>Pizza</h1>
      <div>
        <?php 
          include("commande.class.php");
          include("pizza.class.php");
          $mes_commandes = new Commande();
          $mes_commandes->afficherStock();
          $mes_commandes->nouvelle("royale");
          $mes_commandes->afficherStock();
        ?>
      </div>
  </body>
  <script type="text/javascript"></script>
</html>