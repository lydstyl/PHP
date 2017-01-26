<?php
/* Smarty version 3.1.30, created on 2017-01-26 12:51:53
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\admin\trame.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889f0e9258043_33654043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b515d5b41b879d58a7f26f54f5ede9de5afa79' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\admin\\trame.html',
      1 => 1485423311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889f0e9258043_33654043 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="./admin.php?page=autre">Autre</a></li>
            </ul>
            <div class="right">
                <!--c'est ici que ça change en fonction de l'url-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18775889f0e92541c7_02950441', 'contenu');
?>

            </div>
            <div class="clear"></div>
            <a href="../../index.php">Retour</a>
        </div>
	</body>
</html><?php }
/* {block 'contenu'} */
class Block_18775889f0e92541c7_02950441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cette page ne contient rien<?php
}
}
/* {/block 'contenu'} */
}
