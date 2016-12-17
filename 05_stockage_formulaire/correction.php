<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<?php
		// Fonction remplacant les accents par leur lettre non accentué
		function replaceAccent($str){
		   $str = htmlentities($str, ENT_COMPAT, "UTF-8"); // Convertit tous les caractères éligibles en entités HTML
		   $str = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/','$1',$str);//Analyse tout les élements $Str qui commance par /&
		   return html_entity_decode($str); // Convertit toutes les entités HTML en caractères normaux
		}

		// Champ nom
		$nom = isset($_GET['nom']) ? $_GET['nom'] : false;
		$nom_border = $nom && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($nom)) ? 'green' : 'red';

		// Champ prenom
		$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : false;
		$prenom_border = $prenom && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($prenom)) ? 'green' : 'red';
	?>
	<form action="" method="GET">
		Nom : 
		<input name="nom" type="text" style="border:1px solid <?= (isset($_GET['nom']) ? $nom_border : 'grey'); ?>" value="<?= $nom; ?>" />
		<?= replaceAccent($nom); ?>
		<br /><br />
		
		Prenom : 
		<input name="prenom" type="text" style="border:1px solid <?= (isset($_GET['prenom']) ? $prenom_border : 'grey'); ?>" value="<?= $prenom; ?>" />
		<?= replaceAccent($prenom); ?>
		<br /><br />
		
		<button>SEND</button>
	</form>
</body>
</html>