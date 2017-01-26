<?php
/* Smarty version 3.1.30, created on 2017-01-26 12:51:53
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\admin\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889f0e9205fc8_21023216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163d0c4085cc9ba38e5f222fb8b95462534f4ee8' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\admin\\menu.html',
      1 => 1485421628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./trame.html' => 1,
  ),
),false)) {
function content_5889f0e9205fc8_21023216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187515889f0e9202143_13614535', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./trame.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'contenu'} */
class Block_187515889f0e9202143_13614535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Menu</h2>
    <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>            
        <div>
            <form method="post" action="./admin.php?page=menu">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" />
                <input type="hidden" name="type" value="editer" />
                <input type="number" name="position" min="1" max="20" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['position'];?>
" />
                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>
" />
                <input type="image" src="../../img/edit.png">
            </form>
            <form method="post" action="./admin.php?page=menu">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
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
    <form method="post" action="./admin.php?page=menu">
        <input type="submit" name="type" value="ajouter">
    </form> 
<?php
}
}
/* {/block 'contenu'} */
}
