<?php
    session_start();
    require('connect.php');

    echo 'SELECT * FROM user WHERE login='.$_SESSION['login'];
    $reponse = $bdd->query('SELECT * FROM `user` WHERE `login`="'.$_SESSION['login'].'"');
    $data = $reponse->fetch();
    $loginBdd = $data['login'];

    $reponse = $bdd->query('SELECT * FROM chat ORDER BY id');
    // On affiche chaque entrée une à une
    while ($data = $reponse->fetch()){
        if($loginBdd == $_SESSION['login']){ //si utilisateur en session vaut utilisateur bdd alors à gauche sinon à droite
            $msgLine = '<div class="left clear">';
        }else{
            $msgLine = '<div class="right clear">';
        }
        $msgLine .= $loginBdd.': '.$data['msg'];
        $msgLine .= '</div>';
        echo $msgLine;
    }
    $reponse->closeCursor(); // Termine le traitement de la requête                   