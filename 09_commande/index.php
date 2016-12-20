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
    <h1>Exo PHP</h1>
    <?php
      session_start();
      $_SESSION['panier'] = [];
      include("./catalog.class.php");
      include("./commande.class.php");
      // création du catalogue Auchan
      $auchan = new Catalog(); 
      $auchan->addItem("Pull", 80);
      $auchan->addItem("Veste", 5, "Une veste très mauche de couleur caca d'oie");
      $auchan->addItem("Pantalon", 30, "Pantalon court de couleur vert");
      $auchan->addItem("Chemise", 20, "De belles rayures de zèbre");
      $auchan->printItemsList(); 
      // ajout d'item dans le panier
      $pantalon = $auchan->giveItemFromName("Pantalon");
      $panier = new Commande($pantalon);
      $chemise = $auchan->giveItemFromName("Chemise");
      $panier->addItem($chemise);
      //$panier->printCommande();

      print_r($_SESSION['panier']);

    ?>
  </body>
  <script type="text/javascript"></script>
</html>