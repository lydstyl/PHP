<?php
    $resultat = mysqli_query($link, 'SELECT * FROM `menu` ORDER BY `position`, `name`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){
        array_push($assignTable,  array(
            // 'id' => $data['id'],
            'position' => $data['position'], //pas non plus besoin mais je le laisse pour l'exemple
            'name'=> $data['name']
        ) );
    }
    $smarty->assign("menu", $assignTable);
    $smarty->display('../../view/site/home.html');