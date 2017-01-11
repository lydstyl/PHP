<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin</title>
		<meta charset="utf-8" />
        <link href="./css/admin.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>ADMIN</h1>
            <ul class='menu left'>
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
                    //connexion BDD
                    $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
                    mysqli_query($link, 'SET NAMES UTF8');
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
        </div>
	</body>
</html>