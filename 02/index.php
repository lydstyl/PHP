<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
  <!--		<link href="css/grille.css" rel="stylesheet" type="text/css" />-->
  <!--		<link href="css/style.css" rel="stylesheet" type="text/css" />-->
    <style></style>
  <!--		<script type="text/javascript" src="js/jquery.js"></script>-->
  </head>
  <body>
    <!--<form action="./lol.php">-->
    <form action="./">
      <input type="text" name="prenom">
      <input type="submit">
    </form>
    <?php 
      if(isset($_GET["prenom"]) && !empty($_GET["prenom"])){ # Si la variable éxiste
        echo "Bonjour ".$_GET["prenom"]; # On l'Affiche
      }
    ?>
  </body>
  <script type="text/javascript"></script>
</html>