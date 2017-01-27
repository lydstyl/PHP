<?php
/* Smarty version 3.1.30, created on 2017-01-27 15:44:01
  from "C:\wamp64\www\PHP\25_integration_janv_2017\view\site\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b6ac1c4d381_06032878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'accb5e05e9e2d50210e88fafaf2bcf9596b81997' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\25_integration_janv_2017\\view\\site\\home.html',
      1 => 1485531805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b6ac1c4d381_06032878 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Integration janvier 2017 responsive</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link href="../../css/foundation.css" rel="stylesheet" type="text/css" />
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
            <div class="row readBox">
                <div class="large-5 columns">                    
                    <h2><span>A HUGE </span><br /><span>TITLE HERE</span></h2>
                    <p>
                        Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. 
                        Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante.
                    </p>
                    <a href="#">READ MORE »</a>
                </div>
                <div class="large-7 columns">
                    <img src="../../img/responsive.png" alt="responsive">
                </div>
            </div>
            <div class="middle0"></div>
            <div class="row middle1">
                <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['article']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>  
                    <div class="medium-3 columns">
                        <h3>
                            <span><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titlespan1'], 'UTF-8');?>
</span><br />
                            <span><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titlespan2'], 'UTF-8');?>
</span>
                        </h3>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" alt="img225x140px">
                        <p><?php echo $_smarty_tpl->tpl_vars['article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['paragraphe'];?>
</p>
                        <a href="#" class="button">READ MORE »</a>
                    </div>
                <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
            </div>
            <div class="row clair">
                <div class="columns">
                    <div class="hr"></div>
                </div>
            </div>
            <div class="row middle2">
                <div class="medium-3 columns">
                    <h3>
                        <span>YOUR </span><span>TITLE HERE</span>
                    </h3>
                    <img src="../../img/user.png" alt="img225x225px">
                </div>
                <div class="medium-3 columns">
                    <img src="../../img/user.png" alt="img225x225px" class="m-t103">
                </div>
                <div class="medium-3 columns">
                    <h3>
                        <span>YOUR </span><span>TITLE HERE</span>
                    </h3>
                    <img src="http://placehold.it/225x225" alt="img225x225px">
                </div>
                <div class="medium-3 columns">
                    <p class="m-t103">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis 
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
                    </p>
                    <a href="#" class="button">READ MORE »</a>
                </div>
            </div>
            <div class="middle3"></div>
            <footer>
                <div class="row h4Box">
                    <div class="columns medium-3">
                        <h4>ABOUT US</h4>
                        <div class="imgBox">
                            <img src="http://placehold.it/215x90" alt="img2115x90px">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. 
                            In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. 
                            Nullam non magna vel nisi posuere bibendum vitae sed dui.
                        </p>                        
                        <div class="readMore"><a href="#">Read More »</a></div>
                    </div>
                    <div class="columns medium-3">
                        <h4>QUICK LINKS</h4>
                        <ul>   
                            <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['link']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>  
                                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['link']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
                            <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                        </ul>
                    </div>
                    <div class="columns medium-3">
                        <h4>LATEST BLOG POSTS</h4>
                        <div class="postBox">
                            <h5>Post Title</h5>
                            <div class="date">Friday, 6th April 2000</div>
                            <p>
                                Nulla facilisi. Ut fringilla. Suspendisse potenti. 
                                Nunc feugiat mi a tellus consequat imperdiet.
                            </p>
                            <div class="readMore"><a href="#">Read More »</a></div>
                        </div>
                        <div class="postBox">
                            <h5>Post Title</h5>
                            <div class="date">Friday, 6th April 2000</div>
                            <p>
                                Nulla facilisi. Ut fringilla. Suspendisse potenti. 
                                Nunc feugiat mi a tellus consequat imperdiet.
                            </p>
                            <div class="readMore"><a href="#">Read More »</a></div>
                        </div>
                    </div>
                    <div class="columns medium-3">
                        <h4>CONTACT US</h4>
                        <form onsubmit='return false;'>
                            <div><input type="text" name="name" placeholder="Name"></div>
                            <div><input type="text" name="mail" placeholder="Email"></div>
                            <div><input type="text" name="subject" placeholder="Subject"></div>
                            <div><textarea rows="5" cols="5" name="msg"placeholder="Message"></textarea></div>
                            <div><input type="submit" name="submit" value="SUBMIT"></div>
                        </form>
                    </div>
                </div>
                <div class="row clair">
                    <div class="columns">
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="row lastBar">
                    <div class="columns small-12">
                        <span class="float-left">Copyright © 2013 Domain Name - All Rights Reserved</span>
                        <span class="float-right">Template by OS Templates</span>
                        <div class="clear"></div>
                    </div>
                </div>
            </footer>
        </div>
        <?php echo '<script'; ?>
 src="../../../static/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/submit_msg.js" type="text/javascript"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
