<?php
    //affichage liste menu
    $resultat = mysqli_query($link, 'SELECT * FROM `menu` ORDER BY `position`, `name`');
    $assignTable = [];
    while($data = mysqli_fetch_assoc($resultat)){
        array_push($assignTable,  array(
            //'position' => $data['position'], // pas besoin de la position
            'name'=> $data['name']
        ) );
    }
    $smarty->assign("menu", $assignTable);
    //affichage liste article
    $resultat = mysqli_query($link, 'SELECT * FROM `article` ORDER BY `id` LIMIT 4');
    $assignTableArticle = [];
    while($data = mysqli_fetch_assoc($resultat)){
        $title = $data['title'];
        $tableTitle = explode(" ", $title);
        $titlefirstword = $tableTitle[0];
        $titleotherwords = '';
        for($i=1, $il = count($tableTitle); $i < $il; $i++){ 
            ($i != $il - 1)?$titleotherwords .= $tableTitle[$i].' ':$titleotherwords .= $tableTitle[$i];
        }
        array_push($assignTableArticle,  array(
            'titlespan1' => $titlefirstword,
            'titlespan2' => $titleotherwords,
            'image' => $data['image'],
            'paragraphe'=> $data['paragraphe']
        ) );
    }
    $smarty->assign("article", $assignTableArticle);
    $smarty->display('../../view/site/home.html');