<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin menu</title>
		<meta charset="utf-8" />
        <link href="./css/adminMenu.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>Admin product</h1>
            <?php
            //connexion BDD
            $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
            mysqli_query($link, 'SET NAMES UTF8');
            $resultat = mysqli_query($link, 'SELECT * FROM `product` ORDER BY `id`');
            while($data = mysqli_fetch_assoc($resultat)){
            ?>
                <div>
                    <form method="post" action="setProduct.php">
                        <span><?=$data['name']?></span>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>" />
                        <input src="./img/edit.png" type="image">
                    </form>
                </div>
            <?php
            }
            mysqli_close($link); 
            ?>
        </div>
	</body>
</html>