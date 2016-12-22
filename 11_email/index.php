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
      <?php
        //http://php.net/manual/fr/function.mail.php
        // smtp.free.fr
        // smtp.narinck.fr
        $contenu = 
"Amélie,


Nous avons kidnappé Gabriel et l'avons fait parler sous la torture.
Voici les informations que nous avons sous-tirées :
Il tient énormément à vous et à sa famille.
Il fait de son mieux pour se former et trouver un travail dans le développement informatique.
Nous l'avons relâché à 14h13.


Nous sommes Anonymous.

Nous sommes Légion.

Nous ne pardonnons pas.

Nous n’oublions pas.

Redoutez-nous";
        mail(
            'lydstyl@gmail.com',
            'Gabriel vous aime',
            $contenu
        );

/*        $contenu = "test";
        $headers = array(
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=iso-8859-1',
            'From: Anniversaire <anniversaire@example.com>',
            'Content-Transfer-Encoding: 8bit' . "\r\n"
        );
        $headers = implode("ccc\r\n", $headers);
        mail(
            'lydstyl@gmail.com',
            'test',
            $contenu
        );*/
      ?>
  </body>
  <script type="text/javascript"></script>
</html>