<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17031509263e0c0524b77c0-36027229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19c5b2d3cdb0b93fde4ae499e1c6f7a3bd563ea8' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_6.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17031509263e0c0524b77c0-36027229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0524bad33_40775315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0524bad33_40775315')) {function content_63e0c0524bad33_40775315($_smarty_tpl) {?><div class="payment-logos">
<ul>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
mastercard.svg" alt="paypal" /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
maestro.svg" alt="visa" /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
visa.svg" alt="mastercard"  /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
mir.svg" alt="paypal" /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
halva.svg" alt="visa"  /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Apple_Pay.svg" alt="mastercard" /></li>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
sver.svg" alt="paypal" /></li>
</ul>
</div>
<div class="pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'ldfooter'),$_smarty_tpl);?>
</div><?php }} ?>
