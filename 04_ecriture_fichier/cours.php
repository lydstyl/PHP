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
      <h1>Cours</h1>
      <div>
          <a href="http://php.net/manual/fr/function.str-replace.php">str-replace</a>
      </div>
      <?php
        $mavarC = "coco";
        function test($a,$b, &$c){
            echo $c; // rien dedans si non définit ou sinon la ça vaut coco
            //$a --> on récupère "ez"
            //&$c --> on récupère le lien vers la variable $mavarC
            $c = $a.$b;
        }
        $mavarA = "ez";
        $mavarB = false;
        test($mavarA,$mavarB, $mavarC);
        echo $mavarC; // "ez" dedans
    ?>
    <div>
        <a href="http://php.net/manual/fr/function.preg-replace.php">preg-replace</a>
    </div>
    <?php 
        echo preg_replace('/(a|b)/','*','abcd123_____');
        echo '</br>';
        echo preg_replace('/[a-z]/','*','abcd123_____');
        echo '</br>';
        echo preg_replace('/[A-Z]/','*','abcd123_____');
        echo '</br>';
        echo preg_replace('/[A-Z]/i','*','abcd123_____');
        echo '</br>';
        echo preg_replace('/([A-Z])/i','* $1* ','abcd123_____'); // parenthèse pour obtenir une capture
        echo '</br>';
        echo preg_replace(
            '/([a-z]{1,})\.([a-z]{2,3})/i',
            'site:$1 ext:$2',
            'google.fr'
        ); 
        echo '</br>';
        echo preg_replace(
            '/([a-z]{1,})\.([a-z]{2,3})/i',
            'site : $1, ext : $2',
            'www.google.fr'
        ); 
        echo '</br>';
        echo preg_replace(
            '/([a-z\.]{1,})\.([a-z]{2,3})$/i',
            'site : $1, ext : $2',
            'www...google.fr'
        ); 
        echo '</br>';
        echo preg_replace(
            '/^(https?:\/\/)?([a-z\.]{1,})\.([a-z]{2,3})$/i',
            'protocole : $1, domaine : $2, extension : $3',
            'https://www.google.fr'
        );
        echo '</br>';
        echo preg_replace(
            '/^(?:https?:\/\/)?([a-z\.]{1,})\.([a-z]{2,3})$/i', // ?: avant = on ne capture pas
            'protocole : $1, domaine : $2, extension : $3',
            'https://www.google.fr'
        );
        echo '</br>';
        echo preg_replace(
            '/^(https?)?(:\/\/)?(www\.)?([a-z\.]{1,})\.([a-z]{2,3})$/i',
            'protocole : $1, domaine : $4, extension : $5',
            'https://www.google.fr'
        );
        echo '</br>';
        echo preg_replace(
            '/^((a)(b))((c)(d))$/i',
            '$1 $3 $5 $6',
            'abcd'
        );
        echo '</br>';
        echo preg_replace(
            '/^((a)(b))((c)(d))$/i',
            '$1 $3 $5 $6 $0', // $0 --> toute la chaine
            'abcd1'
        );
        echo '</br>coco !!!!';
        echo preg_replace(
            '/^(ab?)/i', // a suivi de 0 ou 1 b --> (ab{0,1})
            '*', // $0 --> toute la chaine
            'abbbbcd1'
        );
        echo '</br>';
        echo preg_replace(
            '/^(ab+)/i', // a suivi de 1 ou plusieurs b --> (ab{1,})
            '*', // $0 --> toute la chaine
            'abbbbcd1'
        );
        echo '</br>';
        echo preg_replace(
            '/^(ab*)/i', // a suivi de 0 ou plusieurs b --> (ab{0,})
            '*', // $0 --> toute la chaine
            'abbbbcd1'
        );
        echo '</br>';
        //(.+) --> tous les caractères minimum 1
    ?>
  </body>
  <script type="text/javascript"></script>
</html>