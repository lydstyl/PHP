<h2>Produits</h2>
<?php
$resultat = mysqli_query($link, 'SELECT * FROM `product` ORDER BY `id`');
while($data = mysqli_fetch_assoc($resultat)){
?>
    <div>
        <!--<form method="post" action="setProduct.php">-->
        <form method="post" action="./admin.php?right=setProduct">
            <span><?=$data['name']?></span>
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input src="./img/edit.png" type="image">
        </form>
    </div>
<?php
}
?>