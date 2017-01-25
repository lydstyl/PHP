<?php
    //connexion bdd
    // try{
    //     $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
    // }
    // catch (Exception $e){
    //     die('Erreur : ' . $e->getMessage());
    // }
    require('connect.php');
    // Si tout va bien, on peut continuer et afficher l'historique
    $reponse = $bdd->query('SELECT * FROM chat ORDER BY id');
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