<?php
    // assign
        //connexion BDD à include ?
        $link = mysqli_connect("localhost","root", "", "gucci") or die("Impossible de se connecter : ".mysqli_error());
        mysqli_query($link, 'SET NAMES UTF8');