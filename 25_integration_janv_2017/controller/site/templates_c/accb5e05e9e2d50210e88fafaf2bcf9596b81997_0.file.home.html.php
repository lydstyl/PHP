<?php
/* Smarty version 3.1.30, created on 2017-01-26 13:52:16
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\site\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889ff101cb641_09457353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'accb5e05e9e2d50210e88fafaf2bcf9596b81997' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\site\\home.html',
      1 => 1485438731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889ff101cb641_09457353 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Integration janvier 2017 responsive</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link href="../../css/static/css/foundation.css" rel="stylesheet" type="text/css" />
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <header>
                <h1 class="float-left"><a href="#">Design</a></h1>                      
                <ul class="float-right">
                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li><a href="#"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'], 'UTF-8');?>
</a></li>
                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                </ul>
                <div class="clear"></div>
            </header>
            <footer>
                <span class="float-left">Copyright © 2013 Domain Name - All Rights Reserved</span>
                <span class="float-right">Template by OS Templates</span>
                <div class="clear"></div>
            </footer>
        </div>
	</body>
</html><?php }
}