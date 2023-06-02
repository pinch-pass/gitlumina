<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/iqitmegamenu/views/templates/hook/front_submenu_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57801116863e0c052276339-01851806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840a88faada6fddc4f7c3fc10dbd69b597ce3c43' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/iqitmegamenu/views/templates/hook/front_submenu_content.tpl',
      1 => 1588320341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57801116863e0c052276339-01851806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'category' => 0,
    'va_link' => 0,
    'manufacturer' => 0,
    'myfile' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0522b96f2_54560139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0522b96f2_54560139')) {function content_63e0c0522b96f2_54560139($_smarty_tpl) {?>


	<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1) {?>
	<div class="row menu_row menu-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth']==0) {?> first_rows<?php }?> menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
		<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>
		<div  class="col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width'];?>
 cbp-menu-column cbp-menu-element menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>cbp-empty-column<?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==6&&isset($_smarty_tpl->tpl_vars['node']->value['content']['absolute'])) {?> cbp-absolute-column<?php }?>" >
			<div class="cbp-menu-column-inner">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>

				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['href'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['href'];?>
" class="cbp-column-title<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==2&&$_smarty_tpl->tpl_vars['node']->value['contentType']==3) {?> cbp-column-title-inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?><span class="label cbp-legend cbp-legend-inner"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'];?>
<span class="cbp-legend-arrow"></span></span><?php }?></a>
					<?php } else { ?>
					<span class="cbp-column-title<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==2&&$_smarty_tpl->tpl_vars['node']->value['contentType']==3) {?> cbp-column-title-inline<?php }?> transition-300"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?><span class="label cbp-legend cbp-legend-inner"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'];?>
<span class="cbp-legend-arrow"></span></span><?php }?></span>

					<?php }?>
				<?php }?>

				


				

				<?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==1) {?>
				
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']) {?>
						<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['ids'];?>

					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==2) {?>
				
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>

						<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['treep']) {?>
							<div class="row cbp-categories-row">
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
								<?php if (isset($_smarty_tpl->tpl_vars['category']->value['title'])) {?>
									<div class="col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line'];?>
">
										<a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['href'];?>
" class="cbp-column-title cbp-category-title"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
										<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?><?php echo $_smarty_tpl->getSubTemplate ("./front_subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>1), 0);?>
<?php }?>
									</div>
									<?php }?>
								<?php } ?>
							</div>

						<?php } else { ?>
							<ul class="cbp-links cbp-category-tree">
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
								<?php if (isset($_smarty_tpl->tpl_vars['category']->value['title'])) {?>
									<li <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>class="cbp-hrsub-haslevel2"<?php }?>><div class="cbp-category-link-w"><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
										<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?><?php echo $_smarty_tpl->getSubTemplate ("./front_subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>2), 0);?>
<?php }?></div>
									</li>
									<?php }?>
								<?php } ?>
							</ul>	
						<?php }?>
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==3) {?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?> 
						<ul class="cbp-links cbp-valinks<?php if (!$_smarty_tpl->tpl_vars['node']->value['content']['view']) {?> cbp-valinks-vertical<?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']==2) {?> cbp-valinks-vertical cbp-valinks-vertical2<?php }?>">
							<?php  $_smarty_tpl->tpl_vars['va_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['va_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['va_link']->key => $_smarty_tpl->tpl_vars['va_link']->value) {
$_smarty_tpl->tpl_vars['va_link']->_loop = true;
?>
								<?php if (isset($_smarty_tpl->tpl_vars['va_link']->value['href'])&&isset($_smarty_tpl->tpl_vars['va_link']->value['title'])) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['va_link']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['va_link']->value['title'];?>
</a></li>
								<?php }?>
							<?php } ?>
						</ul>	
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==4) {?>

					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./products_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'perline'=>$_smarty_tpl->tpl_vars['node']->value['content']['line']), 0);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate ("./products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'perline'=>$_smarty_tpl->tpl_vars['node']->value['content']['line']), 0);?>

						<?php }?>
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==5) {?>
					
					<ul class="cbp-manufacturers row">
						<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
							<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['manufacturer']->value,'htmlall','UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp1."-mf_image.jpg", null, 0);?>
							<?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
							<li class="col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line'];?>
 transition-opacity-300">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value);?>
" title="Manufacturer - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS(Manufacturer::getNameById($_smarty_tpl->tpl_vars['manufacturer']->value),'htmlall','UTF-8');?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['manufacturer']->value,'htmlall','UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer " <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> alt="Manufacturer - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS(Manufacturer::getNameById($_smarty_tpl->tpl_vars['manufacturer']->value),'htmlall','UTF-8');?>
" />
								</a>
							</li>
							<?php }?>
						<?php } ?>
					</ul>	

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==6) {?>

					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['source'])) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['href'];?>
"><?php }?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['source'];?>
" class="img-responsive cbp-banner-image" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['alt'])) {?>alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['node']->value['content']['alt'],'htmlall','UTF-8');?>
"<?php }?>  />
						<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'])) {?></a><?php }?>
					<?php }?>

				<?php }?>

			<?php }?>


			

			

			<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("./front_submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

			<?php } ?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?></div><?php }?>
		</div>
<?php }} ?>
