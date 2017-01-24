<?php
/* Smarty version 3.1.30, created on 2017-01-24 16:05:15
  from "C:\wamp64\www\PHP\18_integration_avec_smarty\tpl\trame.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58877b3bb74d01_96539949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ad5847d4f5e3cf5abf566296d5e38c1d4bfed2' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\18_integration_avec_smarty\\tpl\\trame.html',
      1 => 1485273913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58877b3bb74d01_96539949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>admin</title>
		<meta charset="utf-8" />
        <link href="../../css/admin.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <h1>ADMIN</h1>
            <ul class="menu left">
                <li><a href="./admin.php?page=menuHaut">Menu du haut</a></li>
                <li><a href="./admin.php?page=menuBas">Menu du bas</a></li>
            </ul>
            <div class="right">
                <!--c'est ici que ça change en fonction de l'url-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2676058877b3bb74d06_19702270', 'contenu');
?>

            </div>
            <div class="clear"></div>
            <a href="../../index.php">Retour au site</a>
        </div>
	</body>
</html><?php }
/* {block 'contenu'} */
class Block_2676058877b3bb74d06_19702270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cette page ne contient rien<?php
}
}
/* {/block 'contenu'} */
}
