<?php
/* Smarty version 3.1.30, created on 2017-01-26 10:33:58
  from "C:\wamp64\www\PHP\24_Silicon\view\site\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889d0968f36c6_87595653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f601afb5302d577bcfd194a91dd2c61cb566a3c' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\24_Silicon\\view\\site\\home.html',
      1 => 1485426836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889d0968f36c6_87595653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Silicon</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link href="../../../static/css/normalize.css" rel="stylesheet" type="text/css" />
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
	</head>	
	<body>	
        <div id="page">
            <header>
                <div class="degradeBox">
                    <div class="menuBox">
                        <div class="left">                        
                            <h1><a href="#">SiliconApp</a></h1>
                            <div>a product by Software Company</div>                        
                        </div>
                        <div class="right">
                            <ul>
                                <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                                    <a href="#"><li><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>
</li></a>
                                <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </header>
            <div class="imageBox"></div>
            <div class="downloadBox">downloadBox</div>
            <div class="descriptionBox">descriptionBox</div>
            <footer>
                <div class="left">
                    <ul>
                        <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                            <a href="#"><li><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>
</li></a>
                        <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
                    </ul>
                </div>
                <div class="right">
                    2009 Software Company. All rights reserved
                </div>
                <div class="clear"></div>
            </footer>
        </div>
	</body>
</html><?php }
}
