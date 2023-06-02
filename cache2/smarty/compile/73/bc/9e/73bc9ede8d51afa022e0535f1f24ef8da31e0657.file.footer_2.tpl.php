<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47657889663e0c052491cb6-08738742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bc9ede8d51afa022e0535f1f24ef8da31e0657' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_2.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47657889663e0c052491cb6-08738742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c052496875_25485578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c052496875_25485578')) {function content_63e0c052496875_25485578($_smarty_tpl) {?><div class="footer-tog">
<div class="footer-menu h4"><?php echo smartyTranslate(array('s'=>"О компании"),$_smarty_tpl);?>
</div>
	<div class="toggle-footer">
		<ul>
			<li><a href="/magaziny" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"Магазины"),$_smarty_tpl);?>
</a></li>
			
			
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink(4);?>
" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"Реквизиты"),$_smarty_tpl);?>
</a></li>
			<li><a href="/magaziny" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"Контакты"),$_smarty_tpl);?>
</a></li>
		</ul>
	</div>
	</div>
	<div class="footer-tog">
<div class="footer-menu h4 two"><?php echo smartyTranslate(array('s'=>"Партнерам"),$_smarty_tpl);?>
</div>
	<div class="toggle-footer">
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink(18);?>
" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"Сотрудничество"),$_smarty_tpl);?>
</a></li>
		</ul>
	</div>
	</div><?php }} ?>
