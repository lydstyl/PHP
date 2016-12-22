<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script type="text/javascript" src="jquery.js"></script>
    <style>
      header{width:30%;float:right}
      li{margin-bottom: 20px;}
      #goPanier{margin-top : 50px;}
      div[data-nom]{width: 18%;border: 1px solid red}
    </style>
  </head>
  <body>
    <header>
      <!--div>Panier :</div-->
      <div id="panierBox"></div>
    </header>
    <h1>Panier en POO PHP + Ajax</h1>
    <h2><a href="http://localhost/PHP/10_panier_ajax">Catalog</a></h2>
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
        viderPaner(); // permet de vider le panier via l'url http://localhost/PHP/10_panier_ajax/?viderPanier
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
    ?>
  </body>
  <script type="text/javascript">
    //$.post( "test.php", { name: "John", time: "2pm" } );
      $.ajax({
        url : "commande.php",
        success : function(panier){
          $("#panierBox").html(panier);
        }
      });
    $('div[data-nom]').click(function(e){
      var nom = $(this).attr("data-nom");
      $.ajax({
        url : "",
        data : {"nom" : nom} //data : {"nom": "chemise"},
      })
      $.ajax({
        url : "commande.php",
        success : function(panier){
          $("#panierBox").html(panier);
        }
      });
    })
  </script>
</html>