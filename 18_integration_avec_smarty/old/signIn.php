<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>sign in</title>
		<meta charset="utf-8" />
        <link href="./css/admin.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>Sign In</h1>
            <pre>
                <?php
                    $mysqli = mysqli_connect("localhost","root", "", "gucci") or die(
                        "Impossible de se connecter : ".mysqli_error());
                    mysqli_query($mysqli, 'SET NAMES UTF8');
                    //print_r($_POST);
                    if(isset($_POST['mail'])){
                        $pass = md5($_POST['password']);
                        $request = 'INSERT INTO `user`(`mail`,`password`,`firstname`,`lastname`) VALUES("'.$_POST['mail'].'", "'.$pass.'","'.$_POST['firstname'].'","'.$_POST['lastname'].'")';
                        mysqli_query($mysqli, $request);
                        //echo $request;
                    }
                ?>
            </pre>
            <form action="./signIn.php" method="post">
                <div><input type="text" placeholder="mail" name="mail"></div>
                <div><input type="password" placeholder="password" name="password"></div>
                <div><input type="text" placeholder="first name" name="firstname"></div>
                <div><input type="text" placeholder="last name" name="lastname"></div>
                <div><input type="file" name="picture"></div>
                <div><input type="submit" value="sign in"></div>
            </form>
        </div>
        <a href="index.php">Annuler et retour au site</a>
    </body>
</html>