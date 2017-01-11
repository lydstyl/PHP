<h2>Produits</h2>
<?php
// ajouter
if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
    //echo "on veut ajouter !!";
    mysqli_query($link, 'INSERT INTO `product` SET `name`="ajout", `price`=100, `description`="ajout", `image`="./img/clothe.jpg"');
}
// supprimer
if(isset($_POST['type']) && $_POST['type'] == 'suprimer'){
    mysqli_query($link, 'DELETE FROM `product` WHERE `id`='.$_POST['id']);
}
$resultat = mysqli_query($link, 'SELECT * FROM `product` ORDER BY `id`');
while($data = mysqli_fetch_assoc($resultat)){
?>
    <div>
        <form method="post" action="./admin.php?right=setProduct">
            <span><?=$data['name']?></span>
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input src="./img/edit.png" type="image">
        </form>
        <!--suprimer-->
        <form method="post" action="./admin.php?right=product">
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input type="hidden" name="type" value="suprimer" />
            <input type="image" src="./img/delete.png">
        </form>
    </div>
<?php
}
?>
<!--formulaire ajouter-->
<form method="post" action="./admin.php?right=product">
    <input type="submit" name="type" value="ajouter">
</form>