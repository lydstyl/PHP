<h2>Slider</h2>
<?php
// ajouter
if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
    mysqli_query($link, 'INSERT INTO `slider` SET `image_name`="clothe.jpg"');
}
//modifier
if(isset($_POST['type']) && $_POST['type'] == 'modifier'){
    if(isset($_POST)){
        echo "modif";
        print_r($_POST);
    }
    mysqli_query($link, 'UPDATE `slider` SET `position`="'.$_POST['position'].'", `image_name`="'.$_POST['image_name'].'" WHERE `id`='.$_POST['id']);
}
// supprimer
if(isset($_POST['type']) && $_POST['type'] == 'suprimer'){
    mysqli_query($link, 'DELETE FROM `slider` WHERE `id`='.$_POST['id']);
}

// affichage des information de la BDD
$resultat = mysqli_query($link, 'SELECT * FROM `slider` ORDER BY `position`, `id` DESC');
while($data = mysqli_fetch_assoc($resultat)){
?>
    <div>
        <span><?= $data['image_name'] ?></span>
        <!--modifier-->
        <form method="post" action="./admin.php?right=setSliderImg"> 
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <!--<input type="hidden" name="type" value="modifier" />-->
            <input type="image" src="./img/edit.png">
        </form>
        <!--supprimer-->
        <form method="post" action="./admin.php?right=slider">
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input type="hidden" name="type" value="suprimer" />
            <input type="image" src="./img/delete.png">
        </form>
    </div>
<?php
}
?>
<!--ajouter-->
<form method="post" action="./admin.php?right=slider">
    <input type="submit" name="type" value="ajouter">
</form>