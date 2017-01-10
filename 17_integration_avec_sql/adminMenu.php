<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin menu</title>
		<meta charset="utf-8" />
	</head>	
	<body>
        <h1>Admin menu</h1>	
        <?php 
            if(isset($_POST)){
                echo "contenu de \$_POST : ";
                //echo "post : ";
                print_r($_POST);
            }
    


            $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
            mysqli_query($link, 'SET NAMES UTF8');

            //supression
            if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
                mysqli_query($link, 'DELETE FROM `menu` WHERE `id`='.$_POST['id']);
            }

            //edition
            if (isset($_POST['edit']) && $_POST['edit'] != ''){ 
                echo 'on edit l\'id'; 
                echo $_POST['id'];
                mysqli_query($link, 'UPDATE `menu` SET `name`="'.$_POST['edit'].'" WHERE `id`='.$_POST['id']);
            }

            $resultat = mysqli_query($link, 'SELECT * FROM `menu`');
            while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
                $id = $data['id'];
                $name = $data['name'];
        ?>
        <form method="post" action="setMenu.php">
            <span><?= $id ?></span>
            <span><?= $name ?></span>
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="submit" name="type" value="editer">
        </form> 
        <form method="post" action="adminMenu.php">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="submit" name="type" value="supprimer">
        </form> 
        <?php } ?>
        <form method="post" action="setMenu.php">
            <input type="submit" name="type" value="ajouter">
        </form> 
        <?php mysqli_close($link); ?>
	</body>
</html>