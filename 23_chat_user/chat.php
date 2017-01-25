<?php
    session_start();
    // affichage du msg à la suite
    if(isset($_POST['message']) && $_POST['message'] != ''){
        //récupération des valeurs post ajax et session pour le login ou user
        $user = $_SESSION['login']; //Gabriel
        $msg = $_POST['message'];
        require('connect.php');
        // stockage msg + user
        $reponse = $bdd->query('SELECT * FROM user WHERE login="'.$user.'"');
        $data = $reponse->fetch();
        $userId = $data['id'];
        $bdd->query('INSERT INTO `chat` SET `user`="'.$userId.'",`msg`="'.$msg.'";');
    }