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
      label::after{content:' : '}
      input{margin: 10px;border:1px solid black}
    </style>
  <!--		<script type="text/javascript" src="js/jquery.js"></script>-->
  </head>
  <body>
      <h1>Double vérification d'un formulaire en Javascript puis en PHP</h1>
        <?php
          function label($value){
            echo "
              <label for=''>".$value."</label>
            ";
          }
          function input($name, $regex){
              $borderColor = "blue";
              if(isset($_GET[$name]) && !empty($_GET[$name])){
                $value = $_GET[$name];
                $regexPhp = '#'.$regex.'#';
                if(preg_match($regexPhp, $_GET[$name])){
                  $borderColor = "green";
                }else{
                  $borderColor = "red";
                }
              }else{
                $value = "";
                $borderColor = "black";
              }
              echo "
                <input type='text' name='$name' data-regex='$regex' value='$value' style='border-color: $borderColor'/>
              ";
          }
        ?>
    <form action="./" method="GET">
      <div><?php $label = "nom"; label($label); input($label, "^[-a-zA-Zéëïäè]{2,15}$"); ?></div>
      <div><?php $label = "nom_jeune_fille"; label($label); input($label, "^[-a-zA-Zéëïäè]{2,15}$"); ?></div>
      <div><?php $label = "prenom"; label($label); input($label, "^[-a-zA-Zéëïäè]{2,15}$"); ?></div>
      <div>     
        <?php 
          $label = "numero"; label($label); input($label, "^[1-9]{2,5}$"); 
          $label = "type_voie"; label($label); input($label, "^[-a-zA-Zéëïäè]{2,15}$"); 
        ?>
      </div>
      <div>     
        <?php 
          $label = "cp"; label($label); input($label, "^[0-9]{5}$"); 
          $label = "ville"; label($label); input($label, "^[-a-zA-Zéëïäè]{2,15}$"); 
        ?>
      </div>
      <input type="submit" value="ENVOYER">
    </form>
  </body>
  <script type="text/javascript">
    function check(elm){
      //elm = typeof(elm.target) != "undefined" ? elm.target : elm;
      elm = elm.target;
      var regex = elm.getAttribute("data-regex"),
      patt = new RegExp(regex),
      res = patt.test(elm.value), // car inputNom.getAttribute("value"); ne se met pas à jour
      color = "black";
      if(res){color="green"}else{color="red"};
      elm.style.borderColor = color;
    }
    var inputText = document.querySelectorAll("[type='text']");
    for(i=0;i<inputText.length;i++){
      inputText[i].addEventListener('blur',check)
    }
  </script>
</html>