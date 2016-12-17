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
      <h1>Compteur</h1>
      <?php
        /*récupère une valeur si vide 0
        incrémenter de 1
        écrire cette valeur dans notre fichier*/
        $fichier = fopen("compteur.txt", "c+");
        $valeurCompteur = fgets($fichier, 255);
        $valeurCompteurInt = intval($valeurCompteur);
        //$valeurCompteurInt ++;
        fseek($fichier,0);
        fputs($fichier, ++$valeurCompteurInt);
        fclose($fichier);
      ?>
      <div>Compteur: <?php echo $valeurCompteurInt ?></div>
  </body>
  <script type="text/javascript"></script>
</html>