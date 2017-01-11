<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin menu</title>
		<meta charset="utf-8" />
        <link href="./css/adminMenu.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>
        <div id="page">
            <h1>Admin menu</h1>	
            <?php 
                // if(isset($_POST)){
                //     echo "<div>contenu de \$_POST : <pre>";
                //     print_r($_POST);
                //     echo "</pre></div>";
                // }
                //connexion BDD
                $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
                mysqli_query($link, 'SET NAMES UTF8');
                // Ajout d'un nouveau menu
                if(isset($_POST['add']) && $_POST['add'] != ''){
                    mysqli_query($link, 'INSERT INTO `menu` SET `name`="'.$_POST['add'].'"');
                }
                //supression
                if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
                    mysqli_query($link, 'DELETE FROM `menu` WHERE `id`='.$_POST['id']);
                }
                //edition
                if (isset($_POST['edit']) && $_POST['edit'] != ''){ 
                    mysqli_query($link, 'UPDATE `menu` SET `name`="'.$_POST['edit'].'" WHERE `id`='.$_POST['id']);
                }
                //selection et affichage d'éléments de la BDD
                $resultat = mysqli_query($link, 'SELECT * FROM `menu` ORDER BY `id`');
                while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
                    $id = $data['id'];
                    $name = $data['name'];
            ?>
            <div>
                <form method="post" action="setMenu.php">
                    <span><?= $id ?></span>
                    <span><?= $name ?></span>
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <input type="hidden" name="type" value="editer" />
                    <input type="hidden" name="value" value="<?= $name ?>" />
                    <input type="image" src="./img/edit.png">
                </form> 
                <form method="post" action="adminMenu.php">
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <input type="hidden" name="type" value="supprimer" />
                    <input type="image" src="./img/delete.png">
                </form> 
            </div>
            <?php } ?>
            <form method="post" action="setMenu.php">
                <input type="submit" name="type" value="ajouter">
            </form> 
            <?php mysqli_close($link); ?>
        </div>
	</body>
</html>