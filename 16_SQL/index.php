<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>exo PHP</title>
		<meta charset="utf-8" />
	</head>	
	<body>	
        <?php
            //$link = mysql_connect("localhost","root", "") or die("Impossible de se connecter : ".mysql_error());
            //$link = @mysql_connect("localhost","root", "") or die("Impossible de se connecter : ".mysql_error());
            //$link = mysqli_connect("localhost","root", "") or die("Impossible de se connecter : ".mysqli_error()); //mysqli_ plus récent que mysql_ connexion au serveur
            $link = mysqli_connect("localhost","root", "", "formation") or die("Impossible de se connecter : ".mysqli_error()); //mysqli_ plus récent que mysql_ connexion au serveur + bdd formation
            //echo 'Connexion réussie';
            //printf("Jeu de caractère initial : %s\n", $link->character_set_name());
            mysqli_query($link, 'SET NAMES UTF8'); // force le transfert BDD --> PAGE à se faire en utf8 et équivaut à : $link->set_charset("utf8")
            //printf("Jeu de caractère après modification : %s\n", $link->character_set_name());
            $resultat = mysqli_query($link, 'SELECT * FROM `page`');
            while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
                $id = $data['id'];
        ?>
            <a href="http://localhost/PHP/16_SQL/index?id=<?= $id ?>">lien de l'id <?= $id ?></a><br/>
        <?php }
            $resultat = mysqli_query($link, 'SELECT * FROM `page` WHERE `id`='.$_GET['id']);
            $data = mysqli_fetch_assoc($resultat);
            $titre = $data['titre'];
            $contenu = $data['contenu'];
        ?>
        <h2><?= $titre ?></h2>
        <p><?= $contenu ?></p>
        <?php mysqli_close($link); ?>
	</body>
</html>