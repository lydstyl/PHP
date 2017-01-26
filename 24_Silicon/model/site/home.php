<?php
    $resultat = mysqli_query($link, 'SELECT * FROM `menu` ORDER BY `position` DESC, `name`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
        array_push($assignTable,  array(
            'id' => $data['id'],
            'position' => $data['position'],
            'name'=> $data['name']
        ) );
    }
    $smarty->assign("menu", $assignTable);
    $smarty->display('../../view/site/home.html');