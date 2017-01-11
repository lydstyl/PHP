<h2>Featured</h2>
<?php
// modifier
if(isset($_POST['type']) && $_POST['type'] == 'modifier'){
    mysqli_query($link, "UPDATE `product` SET `featured`='".$_POST['featured']."' WHERE `id`=".$_POST['id']);
}
// affichage des information de la BDD
$resultat = mysqli_query($link, 'SELECT * FROM `product` ORDER BY `featured` DESC, `image`, `id`');
while($data = mysqli_fetch_assoc($resultat)){
?>
    <div>
        <span><?= $data['featured'] ?> : </span>
        <span><?= $data['name'] ?> - </span>
        <span><?= $data['image'] ?></span>
        <!--modifier-->
        <form method="post" action="./admin.php?right=featured"> 
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input type="hidden" name="type" value="modifier" />
            <input type="text" name="featured" value="<?= $data['featured'] ?>">
            <input type="image" src="./img/edit.png">
        </form>
    </div>
<?php
}
?>