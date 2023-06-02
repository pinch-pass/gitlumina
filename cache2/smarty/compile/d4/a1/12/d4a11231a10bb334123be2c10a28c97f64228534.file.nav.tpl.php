<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:55:07
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86993979163e0c06b9d57a4-61745239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a11231a10bb334123be2c10a28c97f64228534' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/nav.tpl',
      1 => 1675113677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86993979163e0c06b9d57a4-61745239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c06b9e9471_64784269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c06b9e9471_64784269')) {function content_63e0c06b9e9471_64784269($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value) {?>
			<div class="mainsubtablist" style="display:none;"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"header_search",'show_clear_btn'=>1), 0);?>

			</li>
			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t']->value['href'],'html','UTF-8');?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t']->value['name'],'html','UTF-8');?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
							<li id="subtab-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t2']->value['class_name'],'html','UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']) {?> class="active"<?php }?>>
								<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t2']->value['href'],'html','UTF-8');?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t2']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['t2']->value['name'],'html','UTF-8');?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl);?>

	</nav>
</div>
<?php }} ?>
