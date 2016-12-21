<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>
        li{margin-bottom: 20px;}
    </style>
  </head>
  <body>
    <h1>Commande</h1>
    <?php
      session_start();
      include("./catalog.class.php");
      include("./commande.class.php");

      // création du catalogue Auchan et ajout d'articles dans le catalogue
      $auchan = new Catalog("Auchan"); 
      $auchan->addItem("Pull", 80);
      $auchan->addItem("Veste", 5, "Une veste très moche de couleur caca d'oie");
      $auchan->addItem("Pantalon", 30, "Pantalon court de couleur vert");
      $auchan->addItem("Chemise", 20, "De belles rayures de zèbre");

      $panier = new Commande($auchan);
      $panier->printItemsList();
    ?>
    <div><a href="index.php">Retour au catalog</a></div>
  </body>
  <script type="text/javascript"></script>
</html>