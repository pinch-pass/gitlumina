<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:55:07
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119227455963e0c06b91e696-65584100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685554c2d3800c357fb224b73e0dadaad8d5ca32' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/content.tpl',
      1 => 1675113675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119227455963e0c06b91e696-65584100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c06b920313_60125629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c06b920313_60125629')) {function content_63e0c06b920313_60125629($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
