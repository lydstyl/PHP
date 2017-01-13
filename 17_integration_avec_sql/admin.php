<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin</title>
		<meta charset="utf-8" />
        <link href="./css/admin.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <?php 
                session_start();
                //connexion BDD
                $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
                mysqli_query($link, 'SET NAMES UTF8');
                $h1 = '';
                if(isset($_SESSION['id'])){
                    $resultat = mysqli_query($link, 'SELECT * FROM `user` WHERE `id`='.$_SESSION['id']);
                    $data = mysqli_fetch_assoc($resultat);
                    $h1 = $data['firstname'];
                    $h1 = strtoupper($h1);
                }
            ?>
            <h1>ADMIN <?=$h1?></h1>
            <ul class='menu left'>
                <li><a href="./admin.php?right=user">User</a></li>
                <li><a href="./admin.php?right=slider">Slider</a></li>
                <li><a href="./admin.php?right=menu">Menu</a></li>
                <li><a href="./admin.php?right=featured">Featured</a></li>
                <li><a href="./admin.php?right=popular">Popular</a></li>
                <li><a href="./admin.php?right=product">Produit</a></li>
                <li><a href="./admin?right=pagination.php">Liste produit + pagination</a></li>
                <li><a href="./admin.php?right=bottomMenu">Menu du bas</a></li>
            </ul>
            <div class="right">
                <?php
                    if (isset($_GET['right']) && $_GET['right'] != ''){
                        switch ($_GET['right']) {
                            case 'slider':
                            case 'setSliderImg':
                            case 'menu':
                            case 'setMenu':
                            case 'product':
                            case 'setProduct':
                            case 'setText':
                            case 'featured':
                            case 'setfeatured':
                            case 'user':
                                //inclusion
                                include('./'.$_GET['right'].'.php');
                                break;
                            default:
                                echo"<p>Cliquez sur un élément du menu pour l'afficher ici</p>";
                                break;
                        }
                    }else{
                        echo"<p>Cliquez sur un élément du menu pour l'afficher ici</p>";
                    }
                    // déconnexion BDD
                    mysqli_close($link); 
                ?>
            </div>
            <div class="clear"></div>
            <a href="index.php">Retour au site</a>
        </div>
	</body>
</html>