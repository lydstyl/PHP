<?php
/* Smarty version 3.1.30, created on 2017-01-24 09:53:35
  from "C:\wamp64\www\PHP\18_integration_avec_smarty\tpl\trame.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887241f61e709_41945247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ad5847d4f5e3cf5abf566296d5e38c1d4bfed2' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\18_integration_avec_smarty\\tpl\\trame.html',
      1 => 1485251599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./menu.html' => 1,
  ),
),false)) {
function content_5887241f61e709_41945247 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:./menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </ul>
            <div class="right">
                <!--c'est ici que ça change en fonction de l'url-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6835887241f61a886_70023120', 'contenu');
?>

            </div>
            <div class="clear"></div>
            <a href="../../index.php">Retour au site</a>
        </div>
	</body>
</html><?php }
/* {block 'contenu'} */
class Block_6835887241f61a886_70023120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cette page ne contient rien<?php
}
}
/* {/block 'contenu'} */
}
