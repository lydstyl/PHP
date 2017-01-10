<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>set menu</title>
		<meta charset="utf-8" />
        <link href="./css/adminMenu.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>Set menu</h1>
            <?php 
                // if(isset($_POST)){
                //     echo "<div>contenu de \$_POST : <pre>";
                //     print_r($_POST);
                //     echo "</pre></div>";
                // }
                // Connexion bdd + utf8
                $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
                mysqli_query($link, 'SET NAMES UTF8');
                // Génération du formulaire ajouter
                if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
            ?>
                    <form method="post" action="adminMenu.php">
                        <input type="text" name="add"> <!-- ou ajouter récupérer l'info en poste ou en get avant de générer ... -->
                        <input type="submit" value="<?= $_POST['type'] ?>">
                    </form>
            <?php 
                }
                // Editer
                if(isset($_POST['type']) && $_POST['type'] == 'editer'){
            ?>
                    <form method="post" action="adminMenu.php">
                        <input type="hidden" name="id" value="<?= $_POST['id'] ?>" />
                        <input type="text" name="edit" value="<?= $_POST['value'] ?>">
                        <!--<input type="submit" value="<?= $_POST['type'] ?>">-->
                        <!--<input type="image" name="image" src="./img/edit.png" width="50">-->
                        <input type="image" src="./img/edit.png">
                    </form>
            <?php 
                }
                mysqli_close($link); // déconnexion bdd ?>
            <div>
                <a href="./adminMenu.php">Retour</a>
            </div>
        </div>
	</body>
</html>