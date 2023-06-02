<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blockwishlist/blockwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149715448263e0c05246a547-06525345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5cd668a06d43f19556eaadb6df4d5e62e6e8c01' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blockwishlist/blockwishlist_top.tpl',
      1 => 1675099637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149715448263e0c05246a547-06525345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_products' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0524718e4_67054989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0524718e4_67054989')) {function content_63e0c0524718e4_67054989($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('wishlistProductsIds'=>$_smarty_tpl->tpl_vars['wishlist_products']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loggin_required')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loggin_required'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loggin_required'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'added_to_wishlist')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'added_to_wishlist'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'added_to_wishlist'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mywishlist_url'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'quotes','UTF-8')),$_smarty_tpl);?>
<?php if (intval($_smarty_tpl->tpl_vars['wishlist_products']->value)>0) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mywishlist_count'=>count($_smarty_tpl->tpl_vars['wishlist_products']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mywishlist_count'=>0),$_smarty_tpl);?>
<?php }?><?php }} ?>
