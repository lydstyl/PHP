<?php
    // Ajout d'un nouveau menu
    if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
        mysqli_query($link, 'INSERT INTO `article` SET `title`="ajout", `paragraphe`="ajout"');
        echo 'INSERT INTO `article` SET `title`="ajout", `paragraphe`="ajout"';
    }
    // supression
    if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
        mysqli_query($link, 'DELETE FROM `article` WHERE `id`='.$_POST['id']);
    }
    // edition
    if (isset($_POST['type']) && $_POST['type'] == 'editer'){ 
        mysqli_query($link, 'UPDATE `article` SET `title`="'.$_POST['title'].'", `image`="'.$_POST['image'].'", `paragraphe`="'.$_POST['paragraphe'].'" WHERE `id`='.$_POST['id']);
    }
    //affichage liste
    $resultat = mysqli_query($link, 'SELECT * FROM `article` ORDER BY `id`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
        array_push($assignTable,  array(
            'id' => $data['id'],
            'title' => $data['title'],
            'image' => $data['image'],
            'paragraphe'=> $data['paragraphe']
        ) );
    }
    $smarty->assign("menu", $assignTable);
    $smarty->display('../../view/admin/article.html');