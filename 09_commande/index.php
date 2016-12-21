<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>
        li{margin-bottom: 20px;}
        #goPanier{margin-top : 50px;}
    </style>
  </head>
  <body>
    <h1><a href="http://localhost/PHP/09_commande">Catalog</a></h1>
    <?php
      include("./catalog.class.php");
      include("./commande.class.php");

      function viderPaner(){
        unset($_SESSION['panier']);
        $_SESSION['panier'] = [];
        echo "<div>Panier vidé !</div>";
      }

      session_start();
      if(isset($_GET['viderPanier'])){
        viderPaner(); // permet de vider le panier via le lien "Vider le paner"
      }

      // création du catalogue Auchan et ajout d'articles dans le catalogue
      $auchan = new Catalog("Auchan"); 
      $auchan->addItem("Pull");
      $auchan->addItem("Veste", 5, "Une veste très moche de couleur caca d'oie");
      $auchan->addItem("Pantalon", 30, "Pantalon court de couleur vert");
      $auchan->addItem("Chemise", 20, "De belles rayures de zèbre");
      $auchan->printItemsList(); // affiche les items du catalogue avec leur lien "Ajouter à la commande"

      if(isset($_GET['nom'])){
        $item = $_GET['nom'];
        array_push($_SESSION['panier'], $item); // permet d'ajouter les noms des items dans $_SESSION
      }
      echo "<br/>Contenu de \$_SESSION['panier'] :<br/>";
      print_r($_SESSION['panier']);
    ?>
    <div id="goPanier"><a href="commande.php">Voir le panier</a></div>
    <div><a href="?viderPanier=true">Vider le panier</a></div>
  </body>
  <script type="text/javascript"></script>
</html>