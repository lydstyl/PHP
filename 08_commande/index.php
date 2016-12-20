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
      include("./catalog.class.php");
      include("./commande.class.php");

      

       $auchan = new Catalog(); // création du catalogue Auchan

     // ajout de 3 items dans le catalogue auchan
      $auchan->addItem("Pull", 80);
      $auchan->addItem("Veste", 5, "Une veste très mauche de couleur caca d'oie");
      $auchan->addItem("Pantalon", 30, "Pantalon court de couleur vert");
      $auchan->addItem("Chemise", 20, "De belles rayures de zèbre");

      $auchan->printItemsList(); // on affiche dans le navigateur la liste des items du catalogue Auchan

      $pull = $auchan->giveItemsList()[0]; // $Pull devient le premier objet du catalogue Auchan équivaut à giveItemFromName("Pull")

      $panier = new Commande($pull); // on créé un nouvel objet commande qu'on appelle panier, le prenier objet du panier sera $Pull

      $pantalon = $auchan->giveItemFromName("Pantalon");
      $panier->addItem($pantalon); // on ajoute l'objet $pantalon à la commande

      $chemise = $auchan->giveItemFromName("Chemise");
      $panier->addItem($chemise);
      $panier->addItem($chemise); // une deuxième chemise 

      $panier->printCommande();

      
      //session_reset();
      //unset($_SESSION['panier']);
      //print_r($_SESSION);

      //print_r($_SESSION['panier'][0]->nom);
      //print_r($_SESSION['panier']);
      //echo "<br/><br/>";
      //print_r($_SESSION['panier'][0]);
      
      //afficher catalogue produit avec boutons pour ajouter au panier
      //afficher panier


 /*     $le_panier = $_SESSION['panier'];
      print_r($le_panier);


      function printCommande(&$le_panier){
          //echo "<h2>Votre commande vaut ".$le_panier->giveTotal()." € et contient :</h2><ul>";
          for($i = 0, $il = count($le_panier); $i < $il; $i++){
              $nomItem = $le_panier[$i]->nom;
              $prixItem = $le_panier->itemsList[$i]->prix;
              $descriptionItem = $le_panier->itemsList[$i]->description;
              echo "
                  <li>
                      Un $nomItem d'une valeur de 
                      $prixItem €. Description : 
                      $descriptionItem
                  </li>";
          }
          echo "</ul>";
      }*/

      //printCommande($panier);

    ?>
  </body>
  <script type="text/javascript"></script>
</html>