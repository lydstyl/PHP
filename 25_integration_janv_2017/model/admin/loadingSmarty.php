<?php
    // chargement de smarty
    require '../../view/admin/Smarty.class.php';
    $smarty = new Smarty;
    // optionnel ?
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 0; // avant 120 sec