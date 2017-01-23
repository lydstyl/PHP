<?php
/* Smarty version 3.1.30, created on 2017-01-23 13:49:19
  from "C:\wamp64\www\PHP\20_smarty\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588609dfe9fc01_36299516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522c946a5651990cf72eb90193bb04c540d815ff' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\20_smarty\\tpl\\index.html',
      1 => 1485179359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588609dfe9fc01_36299516 (Smarty_Internal_Template $_smarty_tpl) {
?>
- <strong><?php echo $_smarty_tpl->tpl_vars['ma_variable']->value;?>
</strong> <br />
- <?php echo $_smarty_tpl->tpl_vars['une_variable']->value;?>
 <br />
- <?php echo $_smarty_tpl->tpl_vars['une_autre_variable']->value;?>
 <br />
- <?php echo $_SERVER['SERVER_NAME'];?>
 <br />
<!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_matiere']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_matiere']->value, 'matiere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['matiere']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['matiere']->value;?>
 est une matière <br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <?php echo '<script'; ?>
 language=javascript>
        function dire(valeur){
            alert(valeur);
        }
        alert("ococo");
    <?php echo '</script'; ?>
>
<?php }
}
