<?php
    // affichage du msg à la suite
    if(isset($_POST['message']) && $_POST['message'] != ''){
        //récupération des valeurs post ajax
        $user = $_POST['user'];
        $msg = $_POST['message'];
        //ajouter à la suite de la discution
        if($user == 'user1'){
            $msgLine = '<div class="left clear">';
        }else{
            $msgLine = '<div class="right clear">';
        }
        $msgLine .= $user.': '.$msg;
        $msgLine .= '</div>';
        echo $msgLine;
        require('connect.php');
        // stockage msg + user
        $_POST['user'] == 'user1' ? $userBdd = 1 : $userBdd = 2;
        $bdd->query('INSERT INTO `chat` SET `user`="'.$userBdd.'",`msg`="'.$msg.'";');
    }