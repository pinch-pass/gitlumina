<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:10
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36648292563e0c032ee2340-17454925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd79251f88278be7b7842cf2a50952e6ad41f64' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1675113718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36648292563e0c032ee2340-17454925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c032ee5289_36084088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c032ee5289_36084088')) {function content_63e0c032ee5289_36084088($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
