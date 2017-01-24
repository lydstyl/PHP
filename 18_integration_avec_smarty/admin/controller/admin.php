<?php
    //chargement du model approprié
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'menuBas':
        case 'menuHaut2':
            include('../model/'.$_GET['page'].'.php');
            break;
        default:
            include('../model/menuHaut2.php');
            break;
    }
    }else{
            include('../model/menuHaut2.php');
    }