<?php
    //connexion BDD
    $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
    mysqli_query($link, 'SET NAMES UTF8');



    // chargement de smarty
    require '../../tpl/Smarty.class.php';
    $smarty = new Smarty;
    // optionnel ?
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 0; // avant 120 sec
    // assign
    $smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
    $smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
    // display
    $smarty->display('../../tpl/menuBas.html');

    // déconnexion BDD
    mysqli_close($link); 