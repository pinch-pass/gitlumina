<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136818944163e0c05245e953-53838466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e35bf5a23ada423d61a3f1d5914d2b9edc43036' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136818944163e0c05245e953-53838466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c052467c95_96869646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c052467c95_96869646')) {function content_63e0c052467c95_96869646($_smarty_tpl) {?>
    <!-- Block permanent links module HEADER -->
<ul id="header_links" >

    <li class="hidden-phone">
        <a class="rooms" href="/magaziny"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="<?php echo smartyTranslate(array('s'=>'Магазины','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" width="28px" /><img class="hover-link" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps-hov.svg" alt="<?php echo smartyTranslate(array('s'=>'Магазины','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" width="28px" /><?php echo smartyTranslate(array('s'=>'Магазины','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>

    <li class="hidden-phone">
        <a class="link-img-myaccount" href="tel:84951201827" title="<?php echo smartyTranslate(array('s'=>'Позвонить','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
phone.svg" width="28px" alt="<?php echo smartyTranslate(array('s'=>'Позвонить','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" /><img class="hover-link" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
phone-hov.svg" width="28px" alt="<?php echo smartyTranslate(array('s'=>'Позвонить','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" /><?php echo smartyTranslate(array('s'=>'Позвонить','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>

        </a>
    </li>
    <li>
        <a class="link-img-wishlist" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
heart.svg" alt="<?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" width="28px" /><img class="hover-link" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
heart-hov.svg" alt="<?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" width="28px" /><span>0</span><?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>


        </a>
    </li>
</ul>
    <!-- /Block permanent links module HEADER --><?php }} ?>
