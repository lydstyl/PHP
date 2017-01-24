<h2>Modification de l'image</h2>
<?php
//récupération infos à partir de l'id
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $resultat = mysqli_query($link, 'SELECT * FROM `slider` WHERE `id`='.$id);
    $data = mysqli_fetch_assoc($resultat);
    ?>
    <img src="./img/<?=$data['image_name']?>" alt="img">
    <form method="post" action="./admin.php?right=slider">
        <div>
            <span>Nom de l'image</span>
            <input type="text" name="image_name" value="<?=$data['image_name']?>">
        </div>
        <div>
            <span>Position de l'image</span>
            <input type="text" name="position" value="<?=$data['position']?>">
        </div>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="type" value="modifier">
    </form>
<?php
}
?>
