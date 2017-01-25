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
        <?php
            session_start();
            require('connect.php');
            // print_r($_POST);
            // print_r($_SESSION);
            if(isset($_POST['logout'])){
                //unset($_SESSION["nome"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
                echo 'session unset';
                session_unset();
                header("Location: index.php");
            }
            if(isset($_SESSION['connected'])){
        ?>
                <div id="page">
                    <h1>Chat en Ajax</h1>
                    <div class="screen"></div>
                    <form>                
                        <input type="text"><input type="button" value="user1"><input type="button" value="user2"><input type="reset">
                    </form>
                    <form method="post" action="index.php">
                        <input type="submit" name="logout" value="logout">
                    </form>
                </div>		
        <?php
            }else{
        ?>
                <div id="login">
                    <h1>Connexion au chat</h1>
                    <form method='post' action='index.php'>
                        <input type="text" name="login" value="" placeholder="login">
                        <input type="password" name="password" value="" placeholder="password">
                        <input type="submit" value="connexion">
                    </form>
                </div>
        <?php
                if(isset($_SESSION['login']) && isset($_SESSION['password'])){
                    $reponse = $bdd->query('SELECT * FROM user WHERE `login`="'.$_POST['login'].'"');
                    $data = $reponse->fetch();
                    if($_POST['password'] == $data['password']){
                        $_SESSION['connected'] = true;
                        echo 'Bonjour '.$data['login'].' vous êtes connecté via votre session';
                    }else{
                        $_SESSION['connected'] = false;
                        echo 'Mauvais mot de passe ou login';
                    }
                }else if(isset($_POST['login']) && isset($_POST['password'])){
                    // vérification que login et pass ok dans bdd puis on récupère l'id
                    $reponse = $bdd->query('SELECT * FROM user WHERE `login`="'.$_POST['login'].'"');
                    $data = $reponse->fetch();
                    if($_POST['password'] == $data['password']){
                        $_SESSION['login'] = $data['login'];
                        $_SESSION['password'] = $data['password'];
                        $_SESSION['connected'] = true;
                        echo 'Bonjour '.$data['login'].' vous êtes connecté et votre session est créée';
                        header("Location: index.php");
                    }else{
                        $_SESSION['connected'] = false;
                        echo 'Mauvais mot de passe ou login';
                    }
                }
            }
        ?>
        <script type="text/javascript" src="../static/js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>