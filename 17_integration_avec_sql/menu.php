<h2>Menu</h2>	
<?php 
    $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
    mysqli_query($link, 'SET NAMES UTF8');
    // Ajout d'un nouveau menu
    if(isset($_POST['add']) && $_POST['add'] != ''){
        mysqli_query($link, 'INSERT INTO `menu` SET `name`="'.$_POST['add'].'"');
    }
    //supression
    if (isset($_POST['type']) && $_POST['type'] == 'supprimer'){
        mysqli_query($link, 'DELETE FROM `menu` WHERE `id`='.$_POST['id']);
    }
    //edition
    if (isset($_POST['edit']) && $_POST['edit'] != ''){ 
        mysqli_query($link, 'UPDATE `menu` SET `name`="'.$_POST['edit'].'" WHERE `id`='.$_POST['id']);
    }
    //selection et affichage d'éléments de la BDD
    $resultat = mysqli_query($link, 'SELECT * FROM `menu` ORDER BY `id`');
    while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
        $id = $data['id'];
        $name = $data['name'];
?>
<div>
    <form method="post" action="./admin.php?right=setMenu">
        <!--<span><?= $id ?></span>-->
        <span><?= $name ?></span>
        <input type="hidden" name="id" value="<?= $id ?>" />
        <input type="hidden" name="type" value="editer" />
        <input type="hidden" name="value" value="<?= $name ?>" />
        <input type="image" src="./img/edit.png">
    </form> 
    <form method="post" action="./admin.php?right=menu">
        <input type="hidden" name="id" value="<?= $id ?>" />
        <input type="hidden" name="type" value="supprimer" />
        <input type="image" src="./img/delete.png">
    </form> 
</div>
<?php } ?>
<form method="post" action="./admin.php?right=setMenu">
    <input type="submit" name="type" value="ajouter">
</form> 