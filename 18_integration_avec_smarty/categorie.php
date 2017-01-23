<h2>Categorie</h2>
<?php
// editer (formulaire d'édition)
if(isset($_POST['type']) && $_POST['type'] == 'editer'){
    //echo "on veut éditer !";
    $resultat = mysqli_query($link, 'SELECT * FROM `categorie` WHERE `id`='.$_POST['id']);
    //echo 'SELECT * FROM `categorie` WHERE `id`='.$_POST['id'];
    $data = mysqli_fetch_assoc($resultat);
?>
    <div>
        <form action="./admin.php?right=categorie" method="post">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            Nom : <input type="text" name="name" value="<?= $data['name'] ?>">
            Popularité : <input type="number" name="popularity" value="<?= $data['popularity'] ?>" min="0" max="5">  
            <input type="submit" name="type" value="modifier">
        </form>
    </div>
<?php
}else{
    // modifier (avant affichage)
    if(isset($_POST['type']) && $_POST['type'] == 'modifier'){
        $request = 'UPDATE `categorie` SET `name`="'.$_POST['name'].'", `popularity`='.$_POST['popularity'].' WHERE `id`='.$_POST['id'];
        mysqli_query($link, $request);
    }
    // ajouter
    if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
        //echo "on veut ajouter !!";
        mysqli_query($link, 'INSERT INTO `categorie` SET `name`="ajout", `popularity`=0');
    }
    // supprimer
    if(isset($_POST['type']) && $_POST['type'] == 'suprimer'){
        mysqli_query($link, 'DELETE FROM `categorie` WHERE `id`='.$_POST['id']);
    }
    $resultat = mysqli_query($link, 'SELECT * FROM `categorie` ORDER BY `popularity` DESC, `name`');
    while($data = mysqli_fetch_assoc($resultat)){
    ?>
        <div>
            <!--editer-->
            <form method="post" action="./admin.php?right=categorie">
                <span><?=$data['name']?></span>
                <input type="hidden" name="id" value="<?= $data['id'] ?>" />
                <input type="hidden" name="type" value="editer" />
                <input src="./img/edit.png" type="image">
            </form>
            <!--suprimer-->
            <form method="post" action="./admin.php?right=categorie">
                <input type="hidden" name="id" value="<?= $data['id'] ?>" />
                <input type="hidden" name="type" value="suprimer" />
                <input type="image" src="./img/delete.png">
            </form>
            <span>popularité : <?= $data['popularity'] ?></span>
        </div>
    <?php
    }
    ?>
    <!--formulaire ajouter-->
    <form method="post" action="./admin.php?right=categorie">
        <input type="submit" name="type" value="ajouter">
    </form>
    <?php
}
?>