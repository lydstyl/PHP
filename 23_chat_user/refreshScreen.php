<?php
    session_start();
    require('connect.php');

    //$reponse = $bdd->query('SELECT * FROM user ');
    //$id_user = '';

    $reponse = $bdd->query('SELECT * FROM chat ORDER BY id');
    // On affiche chaque entrée une à une
    while ($data = $reponse->fetch()){
        if($data['user'] == $_SESSION['']){ //si utilisateur en session vaut utilisateur bdd alors à gauche sinon à droite
            $msgLine = '<div class="left clear">';
        }else{
            $msgLine = '<div class="right clear">';
        }
        $msgLine .= 'user'.$data['user'].': '.$data['msg'];
        $msgLine .= '</div>';
        echo $msgLine;
    }
    $reponse->closeCursor(); // Termine le traitement de la requête                   