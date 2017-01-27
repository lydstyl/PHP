<?php
/* Smarty version 3.1.30, created on 2017-01-27 15:35:33
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\admin\link.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b68c5020088_43410106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5fd37feb6ee4359ab0619eddb2a93bbb1b16f59' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\admin\\link.html',
      1 => 1485531326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./trame.html' => 1,
  ),
),false)) {
function content_588b68c5020088_43410106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23892588b68c501c202_66288426', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./trame.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'contenu'} */
class Block_23892588b68c501c202_66288426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Link</h2>
    <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['link']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>            
        <div>
            <form method="post" action="./admin.php?page=link">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['link']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" />
                <input type="hidden" name="type" value="editer" />
                <input type="number" name="position" min="1" max="20" value="<?php echo $_smarty_tpl->tpl_vars['link']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['position'];?>
" />
                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['link']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>
" />
                <input type="image" src="../../img/edit.png">
            </form>
            <form method="post" action="./admin.php?page=link">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['link']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" />
                <input type="hidden" name="type" value="supprimer" />
                <input type="image" src="../../img/delete.png">
            </form>
        </div>
    <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
        <br>
        <br>
    <form method="post" action="./admin.php?page=link">
        <input type="submit" name="type" value="ajouter">
    </form> 
<?php
}
}
/* {/block 'contenu'} */
}
