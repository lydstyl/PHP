<?php
    // déconnexion BDD à include ?
    mysqli_close($link); 
    $smarty->assign("menu", $assignTable);