<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>set text</title>
		<meta charset="utf-8" />
        <link href="./css/adminMenu.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>Set text</h1>
            <?php
            if(isset($_POST)){
                echo "<div>contenu de \$_POST : <pre>";
                print_r($_POST);
                echo "</pre></div>";
                $id = $_POST['id'];
            }
            //connexion BDD
            $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
            mysqli_query($link, 'SET NAMES UTF8');
            //récupération infos à partir de l'id
            $id = $_POST['id'];
            $resultat = mysqli_query($link, 'SELECT `'.$_POST['attribut'].'` FROM `product` WHERE `id`='.$id.' ORDER BY `id`');
            $data = mysqli_fetch_assoc($resultat);
            echo "<div>contenu de \$data : <pre>";
            print_r($data);
            echo "</pre></div>";
            
            ?>
            <form method="post" action="./setProduct.php">
                <input type="hidden" name="id" value="<?=$_POST['id']?>">
                <input type="hidden" name="attribut" value="<?=$_POST['attribut']?>">

                <input type="text" name="value" value="<?=$data[$_POST['attribut']]?>">
                <input type="submit" name="type" value="modifier">
            </form>

            <?php mysqli_close($link); ?>
        </div>
	</body>
</html>