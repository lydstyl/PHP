<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Ajax chat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link href="../static/css/normalize.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/grille.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>
		<div id="page">
			<h1>Chat en Ajax</h1>
            <div class="screen">
                <?php
                    //connexion bdd
                    try{
                        $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
                    }
                    catch (Exception $e){
                        die('Erreur : ' . $e->getMessage());
                    }
                    // Si tout va bien, on peut continuer et afficher l'historique
                    $reponse = $bdd->query('SELECT * FROM chat ORDER BY id LIMIT 10');
                    // On affiche chaque entrée une à une
                    while ($data = $reponse->fetch()){
                        if($data['user'] == '1'){
                            $msgLine = '<div class="left clear">';
                        }else{
                            $msgLine = '<div class="right clear">';
                        }
                        $msgLine .= 'user'.$data['user'].': '.$data['msg'];
                        $msgLine .= '</div>';
                        echo $msgLine;
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête                   
                ?>
            </div>
            <form>                
                <input type="text"><input type="button" value="user1"><input type="button" value="user2"><input type="reset">
            </form>
		</div>		
        <script type="text/javascript" src="../static/js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>