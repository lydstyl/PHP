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
        <h1>Ecrire dans un fichier</h1>
        div><a href="http://php.net/manual/en/function.fopen.php">fopen</a>
        <?php
            $fp = fopen("fichier.txt", "r");
            //$contenu = fgets($fp, 255); // 255 octets
            while($contenu = fgets($fp, 255)){
                echo 'Une ligne de notre fichier : '.$contenu;
                echo '<br/>';
            } 
            fclose($fp); //si le fichier reste ouvert on ne peut pas l'ouvrir une deuxième fois
            //exit(); //arrete le script ici même s'il y a d'atures script en dessous

            $fp = fopen("compteur.txt", "w+"); //
            fputs($fp, 'mon texte');
            fclose($fp);
        ?>
    </body>
  <script type="text/javascript"></script>
</html>