<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>set product</title>
		<meta charset="utf-8" />
        <link href="./css/adminMenu.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <?php
            if(isset($_POST)){
                echo "<div>contenu de \$_POST : <pre>";
                print_r($_POST);
                echo "</pre></div>";
            }
            //connexion BDD
            $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
            mysqli_query($link, 'SET NAMES UTF8');
            //edition
            if (isset($_POST['type']) && $_POST['type'] == 'modifier'){ 
                echo "coucoucou";
                mysqli_query($link, 'UPDATE `product` SET `'.$_POST['attribut'].'`="'.$_POST['value'].'" WHERE `id`='.$_POST['id']);
            }
            //récupération infos à partir de l'id
            $id = $_POST['id'];
            $resultat = mysqli_query($link, 'SELECT * FROM `product` WHERE `id`='.$id.' ORDER BY `id`');
            $data = mysqli_fetch_assoc($resultat);
            echo "<div>contenu de \$data : <pre>";
            print_r($data);
            echo "</pre></div>";


            // selection et affichage 
            echo"<div>".$data['name']."</div>";
            echo"<div>".$data['price']."</div>";
            echo"<div>".$data['description']."</div>";
            echo"<div>".$data['image']."</div>";
            ?>

            <h1>Set product <?=$data['name']?></h1>
            <div><img src="<?=$data['image']?>" alt="image"></div>

            <!--modification du titre name-->
            <div>
                <form  method="post" action="setText.php">
                    <span>Titre : <?=$data['name']?></span>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="attribut" value="name">
                    <input type="image" src="./img/edit.png">
                </form>
            </div>
            <!--<div>
                <form  method="post" action="setText.php">
                    <span>Url de l'image : <?=$data['image']?></span>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="image" value="<?=$data['image']?>">
                    <input type="image" src="./img/edit.png">
                </form>
            </div>-->

            <?php mysqli_close($link); ?>
            <a href="./adminProduct.php">Retour</a>
        </div>
	</body>
</html>