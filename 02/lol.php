<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style></style>
    <title>exo</title>
  </head>
  <body>
    <!--<form action="./lol.php">-->
    <form action="./lol.php">
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