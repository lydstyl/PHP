<?php
//edition
if (isset($_POST['type']) && $_POST['type'] == 'modifier'){ 
    mysqli_query($link, 'UPDATE `product` SET `'.$_POST['attribut'].'`="'.$_POST['value'].'" WHERE `id`='.$_POST['id']);
}
//récupération infos à partir de l'id
$id = $_POST['id'];
$resultat = mysqli_query($link, 'SELECT * FROM `product` WHERE `id`='.$id.' ORDER BY `id`');
$data = mysqli_fetch_assoc($resultat);
?>
<h2>Set product <?=$data['name']?></h2>
<div><img src="<?=$data['image']?>" alt="image"></div>
<div>
    <form  method="post" action="./admin.php?right=setText">
        <span>Titre : <?=$data['name']?></span>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="attribut" value="name">
        <input type="image" src="./img/edit.png">
    </form>
</div>
<!--<div>
    <form  method="post" action="./admin.php?right=setText">
        <span>Url image : <?=$data['image']?></span>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="attribut" value="image">
        <input type="file" src="./img/edit.png">
    </form>
</div>-->
<div>
    <form  method="post" action="./admin.php?right=setText">
        <span>Url image : <?=$data['image']?></span>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="attribut" value="image">
        <input type="image" src="./img/edit.png">
    </form>
</div>
<div>
    <form  method="post" action="./admin.php?right=setText">
        <span>Prix : <?=$data['price']?></span>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="attribut" value="price">
        <input type="image" src="./img/edit.png">
    </form>
</div>
<div>
    <form  method="post" action="./admin.php?right=setText">
        <span>Description : <?=$data['description']?></span>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="attribut" value="description">
        <input type="image" src="./img/edit.png">
    </form>
</div>
<a href="./admin.php?right=product">Retour</a>