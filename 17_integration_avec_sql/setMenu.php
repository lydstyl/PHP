<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>set menu</title>
		<meta charset="utf-8" />
	</head>	
	<body>	
        <h1>Set menu</h1>
        <?php 
            // connexion bdd + utf8
            $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
            mysqli_query($link, 'SET NAMES UTF8');

            if(isset($_POST)){
                echo "contenu de \$_POST : ";
                print_r($_POST);
            }

            if(isset($_POST['add']) && $_POST['add'] != ''){
                echo 'add != ""';
                // on ajoute $_POST['add']
                mysqli_query($link, 'INSERT INTO `menu` SET `name`="'.$_POST['add'].'"');
            }

            // AJOUTER
            if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
                echo "<br />";
                echo "le type est ";
                echo $_POST['type'];
        ?>
                <form method="post" action="setMenu.php">
                    <input type="text" name="add"> <!-- ou ajouter récupérer l'info en poste ou en get avant de générer ... -->
                    <input type="submit" value="<?= $_POST['type'] ?>">
                </form>
        <?php 
            }
        ?>


        <?php
            // EDITER
            if(isset($_POST['type']) && $_POST['type'] == 'editer'){
                echo "<br />";
                echo "le type est ";
                echo $_POST['type'];

                //mysqli_query($link, 'INSERT INTO `menu` SET `name`="'.$_POST['add'].'"');
        ?>
                <form method="post" action="adminMenu.php">
                    <!--<input type="hidden" name="id" value="id123" />-->
                    <input type="hidden" name="id" value="<?= $_POST['id'] ?>" />
                    <input type="text" name="edit">
                    <input type="submit" value="<?= $_POST['type'] ?>">
                    <input type="image" name="image" src="./img/edit.png" width="50">
                </form>
        <?php 
            }
        ?>


        <?php mysqli_close($link); // déconnexion bdd ?>
        <a href="./adminMenu.php">retour</a>
	</body>
</html>