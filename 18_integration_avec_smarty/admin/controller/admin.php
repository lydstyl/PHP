<?php
    //print_r($_GET);
    if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'categorie':
        case 'featured':
        case 'menuBas':
        case 'menuBas2':
        case 'menuHaut':
        case 'menuHaut2':
        case 'product':
        case 'slider':
        case 'setMenu':
        case 'setfeatured':
        case 'setProduct':
        case 'setSliderImg':
        case 'setText':
        case 'user':
            //chargement du model approprié
            include('../model/'.$_GET['page'].'.php');
            break;
        default:
            //echo"<p>Cliquez sur un élément du menu pour l'afficher ici</p>";
            include('../model/menuHaut2.php');
            break;
    }
    }else{
            include('../model/menuHaut2.php');
        //echo"<p>Cliquez sur un élément du menu pour l'afficher ici</p>";
    }