<?php
    require('../model/loadingSmarty.php'); // chargement de Smarty require --> envoi une erreure contrairement à include
    require('../model/connect.php'); // connexion bdd
    //chargement du model approprié
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'menuBas':
        case 'menuHaut2':
            include('../model/'.$_GET['page'].'.php');
            break;
        default:
            include('../model/menuHaut.php');
            break;
    }
    }else{
            include('../model/menuHaut.php');
    }
    require('../model/disconnect.php'); // déconnexion bdd