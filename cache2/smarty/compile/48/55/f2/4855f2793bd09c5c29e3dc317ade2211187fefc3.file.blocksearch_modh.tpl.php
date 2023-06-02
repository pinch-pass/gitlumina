<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/blocksearch_mod/blocksearch_modh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79702934363e0c05219c434-43952688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4855f2793bd09c5c29e3dc317ade2211187fefc3' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/blocksearch_mod/blocksearch_modh.tpl',
      1 => 1588172043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79702934363e0c05219c434-43952688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c05219e994_62206178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c05219e994_62206178')) {function content_63e0c05219e994_62206178($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_products_search')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
