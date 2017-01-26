<?php
    require('../../model/admin/loadingSmarty.php'); 
    require('../../model/admin/connect.php'); 
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'home':
        //case 'menuHaut2':
            //include('../../model/admin/'.$_GET['page'].'.php');
            include('../../model/site/home.php');
            break;
        default:
            include('../../model/site/home.php');
            break;
    }
    }else{
            include('../../model/site/home.php');
    }
    require('../../model/admin/disconnect.php'); // déconnexion bdd