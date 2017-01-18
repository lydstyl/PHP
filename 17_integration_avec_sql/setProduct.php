<?php
//edition
//print_r($_POST);
if(isset($_POST['menu'])){
    $updateRequest = 'UPDATE `product` SET `menuId`="'.$_POST['menu'].'" WHERE `id`='.$_POST['id'];
    mysqli_query($link, $updateRequest);
}else if(isset($_POST['categorie'])){
    $updateRequest = 'UPDATE `product` SET `categorieId`="'.$_POST['categorie'].'" WHERE `id`='.$_POST['id'];
    mysqli_query($link, $updateRequest);
}else if(isset($_POST['type']) && $_POST['type'] == 'modifier'){ 
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
<div>
    <form  method="post" action="./admin.php?right=setProduct">
        <input type="hidden" name="id" value="<?=$id?>">
        <span>Menu Id : <?=$data['menuId']?></span>
        <select name="menu">
            <?php
                $request = 'SELECT * FROM `menu` ORDER BY `id`';
                $resultatMenuId = mysqli_query($link, $request);
                while($dataMenuId = mysqli_fetch_assoc($resultatMenuId)){
                    if($dataMenuId['id'] == $data['menuId']){ // l'id du menu correspond à celui du produit on le met en selected
                        $option = "<option value='".$dataMenuId['id']."' selected>".$dataMenuId['name']."</option>";
                    }else{ // l'id du menu ne correspond pas à celui du produit
                        $option = "<option value='".$dataMenuId['id']."'>".$dataMenuId['name']."</option>";
                    }
                    echo $option; // on insère l'option dans la balise select
                }
            ?>
        </select>
        <input type="image" src="./img/edit.png">
    </form>
</div>
<div>
    <form  method="post" action="./admin.php?right=setProduct">
        <input type="hidden" name="id" value="<?=$id?>">
        <span>Categorie Id : <?=$data['categorieId']?></span>
        <select name="categorie">
            <?php
                $request = 'SELECT * FROM `categorie` ORDER BY `id`';
                $resultatCategorieId = mysqli_query($link, $request);
                while($dataCategorieId = mysqli_fetch_assoc($resultatCategorieId)){
                    if($dataCategorieId['id'] == $data['categorieId']){ // l'id du menu correspond à celui du produit on le met en selected
                        $option = "<option value='".$dataCategorieId['id']."' selected>".$dataCategorieId['name']."</option>";
                    }else{ // l'id du menu ne correspond pas à celui du produit
                        $option = "<option value='".$dataCategorieId['id']."'>".$dataCategorieId['name']."</option>";
                    }
                    echo $option; // on insère l'option dans la balise select
                }
            ?>
        </select>
        <input type="image" src="./img/edit.png">
    </form>
</div>

<a href="./admin.php?right=product">Retour</a>