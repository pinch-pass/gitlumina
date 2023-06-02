<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/themeconfigurator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41517625063e0c0522c7069-46507919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f38719b524a4727437e1c32b11c593425fcc4707' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/themeconfigurator/views/templates/hook/hook.tpl',
      1 => 1675099937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41517625063e0c0522c7069-46507919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
    'link' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0522d3232_97586215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0522d3232_97586215')) {function content_63e0c0522d3232_97586215($_smarty_tpl) {?>


<?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value) {?>
	<div class="main-categories">
		<div class="cont">
			<div class="main-categories__grid">
				<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
					<div class="main-categories__box">
						<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['hItem']->value['image']));?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8');?>
" class="main-categories__img">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']) {?>
							<div class="main-categories__title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8');?>
</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['hItem']->value['url'],'htmlall','UTF-8');?>
" class="main-categories__link"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8');?>
</a>
						<?php }?>
					</div>
					
				<?php } ?>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['hook']->value=='top') {?>
</div>
<?php }?><?php }} ?>
