<?php
    // Ajout d'un nouveau link
    if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
        echo 'INSERT INTO `link` SET `name`="ajout"';
        mysqli_query($link, 'INSERT INTO `link` SET `name`="ajout"');
    }
    // supression
    if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
        mysqli_query($link, 'DELETE FROM `link` WHERE `id`='.$_POST['id']);
    }
    // edition
    if (isset($_POST['type']) && $_POST['type'] == 'editer'){ 
        mysqli_query($link, 'UPDATE `link` SET `position`="'.$_POST['position'].'", `name`="'.$_POST['name'].'" WHERE `id`='.$_POST['id']);
    }
    // affichage liste
    $resultat = mysqli_query($link, 'SELECT * FROM `link` ORDER BY `position`, `name`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
        array_push($assignTable,  array(
            'id' => $data['id'],
            'position' => $data['position'],
            'name'=> $data['name']
        ) );
    }
    $smarty->assign("link", $assignTable);
    $smarty->display('../../view/admin/link.html');