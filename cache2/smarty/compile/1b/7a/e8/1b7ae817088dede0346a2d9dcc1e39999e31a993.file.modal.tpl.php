<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:55:07
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74437907863e0c06b95c4b6-38146333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7ae817088dede0346a2d9dcc1e39999e31a993' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1675113720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74437907863e0c06b95c4b6-38146333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c06b95d076_88151622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c06b95d076_88151622')) {function content_63e0c06b95d076_88151622($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
