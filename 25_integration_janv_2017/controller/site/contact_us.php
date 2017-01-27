<?php
    if(isset($_POST['msg'])){
        $msg = 'Message de '.$_POST['name'].' qui a comme email '.$_POST['mail']."\r\n\r\n".$_POST['msg'];
        mail('lydstyl@gmail.com', $_POST['subject'], $msg);
    }