<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style></style>
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
        $spa->setAnimal("Oiseau","Lapinou");
        $spa->setAnimal("Tiger","Tigrou");
        
        $spa->getAnimal("Tigrou")->roar();

        $spa->getAnimal("Betoven")->setFood("viande crue");
        $spa->getAnimal("Tom")->setFood("poisson");
        $spa->getAnimal("Lapinou")->setFood("salade");
        $spa->getAnimal("Lapinou")->food = "cocaïne";
        //$food_de_rex = $spa->getAnimal("Rex")->getFood();

        // echo"<pre>";
        // print_r( $spa->getAnimal());
        // echo"</pre>";

        echo "Tom est un ".$spa->getAnimal('Tom')->type."</br>";
        echo "La nourriture de Tom est : ".$spa->getAnimal("Tom")->getFood();

        $babyCat = new Chaton("babyCat");
        $babyCat->roar();


        include('./personnage.class.php');
        $perso = new Personnage();
        //$perso->nom = "Jojo"; // erreur car privé
        $perso->setNom("Gabriel");
        echo $perso->getNom();


        /*Final et abstract peuvent se mettre devant le mot class ou function (dans une class).

        final empeche de surcharger la class enfant
        abstract oblige à surcharger la class enfant

        $this->getNom(); // appelle la fonction enfant si elle existe sinon la fonction parent
        parent::getNom(); //appelle la fonction parent*/
      ?>
  </body>
  <script type="text/javascript"></script>
</html>