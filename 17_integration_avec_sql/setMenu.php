<h2>Set menu</h2>
<?php 
    $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
    mysqli_query($link, 'SET NAMES UTF8');
    // Génération du formulaire ajouter
    if(isset($_POST['type']) && $_POST['type'] == 'ajouter'){
?>
        <form method="post" action="./admin.php?right=menu">
            <input type="text" name="add" value=""> <!-- ou ajouter récupérer l'info en poste ou en get avant de générer ... -->
            <input type="submit" value="<?= $_POST['type'] ?>">
        </form>
<?php 
    }
    // Editer
    if(isset($_POST['type']) && $_POST['type'] == 'editer'){
?>
        <form method="post" action="./admin.php?right=menu">
            <input type="hidden" name="id" value="<?= $_POST['id'] ?>" />
            <div>
                <span>position : </span>
                <input type="text" name="position" value="<?= $_POST['position'] ?>">
            </div>
            <input type="text" name="edit" value="<?= $_POST['value'] ?>">
            <input type="image" src="./img/edit.png">
        </form>
<?php 
    }
?>
<div>
    <a href="admin.php?right=menu">Retour</a>
</div>