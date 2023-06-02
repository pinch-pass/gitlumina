<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147185779763e0c0522d5e13-91160204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d681fa911d501b663f80ec281b01624caf86e93' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/404.tpl',
      1 => 1675432378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147185779763e0c0522d5e13-91160204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0522d8c60_20052759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0522d8c60_20052759')) {function content_63e0c0522d8c60_20052759($_smarty_tpl) {?>
<div class="pagenotfound">
	<div class="img-404">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/img-404.png" alt="<?php echo smartyTranslate(array('s'=>'Page not found'),$_smarty_tpl);?>
" />
	</div>


	<p>
        <?php echo smartyTranslate(array('s'=>'Страница была удалена или никогда не существовала'),$_smarty_tpl);?>

	</p>




	<div class="buttons"><a class="back-btn" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"> <?php echo smartyTranslate(array('s'=>'Вернуться назад'),$_smarty_tpl);?>
</a></div>
</div>

<?php }} ?>
