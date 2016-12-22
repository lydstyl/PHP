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
      #viderPanier{margin-top : 50px;}
      div[data-nom],#viderPanier{width: 18%;border: 1px solid red}
    </style>
  </head>
  <body>
    <header>
      <!--div>Panier :</div-->
      <div id="panierBox"></div>
    </header>
    <h1>Panier en POO PHP + Ajax</h1>
    <h2>Catalog</h2>
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
    <div id="viderPanier">Vider le panier</div>
  </body>
  <script type="text/javascript">
    function ajouterContenuPanier(){
      $.ajax({
        url : "commande.php",
        success : function(panier){
          $("#panierBox").html(panier); // -- on ajoute le contenu du panier 
        }
      });
    }
    // Gestion du clic sur Vider le panier
    $('#viderPanier').click(function(){
        $.ajax({
          url : "?viderPanier"
        })
        ajouterContenuPanier();
    });
    ajouterContenuPanier(); // au chargement de la page
    // Gestion du clic sur AJOUTER VIA AJAX
    $('div[data-nom]').click(function(e){
      var nom = $(this).attr("data-nom"); // on récupère le nom exemple Pull
      $.ajax({
        url : "",
        data : {"nom" : nom} // on envoi le nom via $_GET celui-ci sera récupéré dans $_SESSION
      })
      ajouterContenuPanier();
    })
  </script>
</html>