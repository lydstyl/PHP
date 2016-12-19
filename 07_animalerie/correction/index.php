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
        include('./animalerie.class.php');
        $spa = new Animalerie();
        $spa->setAnimal("Dog","Rex");
        $spa->setAnimal("Dog","Betoven");
        $spa->setAnimal("Cat","Tom");
        $spa->setAnimal("Cat","Minou");
        $spa->setAnimal("Rabbit","Bugs");
        $spa->setAnimal("Rabbit","Lapinou");

        $spa->getAnimal("Betoven")->setFood("viande crue");
        $spa->getAnimal("Tom")->setFood("poisson");
        $spa->getAnimal("Lapinou")->setFood("salade");
        $spa->getAnimal("Lapinou")->food = "cocaïne";

        echo "Tom est un ".$spa->getAnimal('Tom')->type."</br>";
        echo "La nourriture de Tom est : ".$spa->getAnimal("Tom")->getFood();
      ?>
  </body>
  <script type="text/javascript"></script>
</html>