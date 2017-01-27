<?php
    require('../../model/admin/loadingSmarty.php');
    require('../../model/admin/connect.php');
    //chargement du model approprié
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'menu':
        case 'article':
        case 'link':
            include('../../model/admin/'.$_GET['page'].'.php');
            break;
        default:
            include('../../model/admin/menu.php');
            break;
    }
    }else{
            include('../../model/admin/menu.php');
    }
    require('../../model/admin/disconnect.php');