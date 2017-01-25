<?php
    // stocker msg + user en bdd
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