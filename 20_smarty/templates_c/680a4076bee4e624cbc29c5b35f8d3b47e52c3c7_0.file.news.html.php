<?php
/* Smarty version 3.1.30, created on 2017-01-23 15:01:39
  from "C:\wamp64\www\PHP\20_smarty\tpl\news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58861ad3c32a85_83422271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680a4076bee4e624cbc29c5b35f8d3b47e52c3c7' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\20_smarty\\tpl\\news.html',
      1 => 1485183699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58861ad3c32a85_83422271 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\PHP\\20_smarty\\tpl\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_note_qcm')) require_once 'C:\\wamp64\\www\\PHP\\20_smarty\\tpl\\plugins\\function.note_qcm.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Bienvenue sur mon site !</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
       <h1> Mon super système de news </h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
            <strong><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</strong> écrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d/%m/%Y");?>
<br />
            <?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
<br /><br />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div>
            <?php echo smarty_function_note_qcm(array('note'=>"10"),$_smarty_tpl);?>

        </div>
   </body>
</html><?php }
}
