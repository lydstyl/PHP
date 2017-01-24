<h2>Set text</h2>
<?php
//récupération infos à partir de l'id
$id = $_POST['id'];
$resultat = mysqli_query($link, 'SELECT `'.$_POST['attribut'].'`, `image` FROM `product` WHERE `id`='.$id.' ORDER BY `id`');
$data = mysqli_fetch_assoc($resultat);
?>
<h2>Modification de l'attribut : <?=$_POST['attribut']?></h2>
<img src="<?=$data['image']?>" alt="img">
<!--<form method="post" action="./setProduct.php">-->
<form method="post" action="./admin.php?right=setProduct">
    <input type="hidden" name="id" value="<?=$_POST['id']?>">
    <input type="hidden" name="attribut" value="<?=$_POST['attribut']?>">
    <input type="text" name="value" value="<?=$data[$_POST['attribut']]?>">
    <input type="submit" name="type" value="modifier">
</form>