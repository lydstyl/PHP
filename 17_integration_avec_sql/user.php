<h2>User</h2>
<?php
    print_r($_POST);
    // supprimer
    if(isset($_POST['type']) && $_POST['type'] == 'supprimer')){
        mysqli_query($link, 'DELETE FROM `user` WHERE `id`='.$_POST['id']);
    }
    if(isset($_POST['add']) && $_POST['mail'] != '' && $_POST['pass'] != ''){
        // $resultat = mysqli_query($link, 'SELECT * FROM `user`');
        // $data = mysqli_fetch_assoc($resultat);
        //INSERT INTO `User` SET `id`="1",`nom`="Dabir",`prenom`="Maurice";
        $pass = md5($_POST['pass']);
        $resultat = mysqli_query($link, 'INSERT INTO `user` SET `mail`="'.$_POST['mail'].'", `password`="'.$pass.'"');
    }
?>
    <form method="post">
        <input type="text" name="mail" placeholder="mail">
        <input type="text" name="pass" placeholder="mot de passe">
        <input type="submit" name="add" value="Ajouter un utilisateur avec son email">
    </form>
    <ul>
<?php
        $resultat = mysqli_query($link, 'SELECT * FROM `user`');
        while($data = mysqli_fetch_assoc($resultat)){
?>
        <li>
            <?= $data['mail'] ?>
            <form method="post" action="admin.php?right=user">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="submit" name="type" value="supprimer">
            </form>
        </li>
<?php
        }
?>
    </ul>