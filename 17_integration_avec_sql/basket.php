<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin</title>
		<meta charset="utf-8" />
        <link href="./css/admin.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>Panier</h1>
            <?php 
                session_start();
                // connexion BDD
                $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
                mysqli_query($link, 'SET NAMES UTF8');
                // affichage des produits du panier
                if(isset($_SESSION['basket'])){
                    // echo '<pre>';
                    // print_r($_SESSION['basket']);
                    // echo '</pre>';
                    $where = array();
                    foreach ($_SESSION['basket'] as $key => $value){
                        $where[] = '`id`="'.$key.'"';
                    }
                    $request = 'SELECT * FROM `product` WHERE '.implode($where, ' OR ');
                    //echo $request;
                    $resultat = mysqli_query($link, $request);
                    $total = 0;
                    while($data = mysqli_fetch_assoc($resultat)){
                        $qty = $_SESSION['basket'][$data['id']];
                        $total += $qty * $data['price'];
            ?>
                        <div>
                            <span><?=$data['name']?></span>
                            <span> $<?=$data['price']?></span>
                            <span> qty : <?=$qty?></span>
                            <span> total line : <?=$qty  * $data['price']?></span>
                        </div>                        
            <?php 
                    }
                    echo "<strong>Total : $".$total."</strong>";
                }
            ?>
        </div>
        <a href="index.php">Continuer les achats</a>
    </body>
</html>