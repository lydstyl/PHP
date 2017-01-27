<?php
/* Smarty version 3.1.30, created on 2017-01-27 15:29:43
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\admin\trame.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b6767d43509_24429630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b515d5b41b879d58a7f26f54f5ede9de5afa79' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\admin\\trame.html',
      1 => 1485530909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b6767d43509_24429630 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="./admin.php?page=menu">Menu</a></li>
                <li><a href="./admin.php?page=article">Article</a></li>
                <li><a href="./admin.php?page=link">Quick links</a></li>
            </ul>
            <div class="right">
                <!--c'est ici que ça change en fonction de l'url-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3821588b6767d3f687_49913418', 'contenu');
?>

            </div>
            <div class="clear"></div>
            <a href="../../index.php">Retour</a>
        </div>
	</body>
</html><?php }
/* {block 'contenu'} */
class Block_3821588b6767d3f687_49913418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cette page ne contient rien<?php
}
}
/* {/block 'contenu'} */
}
