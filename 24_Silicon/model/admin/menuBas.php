<?php
    // Ajout d'un nouveau menu
    if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
        mysqli_query($link, 'INSERT INTO `menu_bas` SET `name`="ajout"');
    }
    // supression
    if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
        mysqli_query($link, 'DELETE FROM `menu_bas` WHERE `id`='.$_POST['id']);
    }
    // edition
    if (isset($_POST['type']) && $_POST['type'] == 'editer'){ 
        mysqli_query($link, 'UPDATE `menu_bas` SET `position`="'.$_POST['position'].'", `name`="'.$_POST['name'].'" WHERE `id`='.$_POST['id']);
    }
    // affichage liste
    $resultat = mysqli_query($link, 'SELECT * FROM `menu_bas` ORDER BY `position` DESC, `name`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
        array_push($assignTable,  array(
            'id' => $data['id'],
            'position' => $data['position'],
            'name'=> $data['name']
        ) );
    }
    $smarty->assign("menu", $assignTable);
    $smarty->display('../../tpl/menuBas.html');