<?php
    require('../../model/admin/loadingSmarty.php'); // chargement de Smarty require --> envoi une erreure contrairement à include
    require('../../model/admin/connect.php'); // connexion bdd
    //chargement du model approprié
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'menu':
        //case 'menuHaut2':
            include('../../model/admin/'.$_GET['page'].'.php');
            break;
        default:
            include('../../model/admin/menu.php');
            break;
    }
    }else{
            include('../../model/admin/menu.php');
    }
    require('../../model/admin/disconnect.php'); // déconnexion bdd