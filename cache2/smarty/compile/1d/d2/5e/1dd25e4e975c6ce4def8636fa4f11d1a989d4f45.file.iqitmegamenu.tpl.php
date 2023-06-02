<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/iqitmegamenu/views/templates/hook/iqitmegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80254805063e0c052233475-89873056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd25e4e975c6ce4def8636fa4f11d1a989d4f45' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/iqitmegamenu/views/templates/hook/iqitmegamenu.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80254805063e0c052233475-89873056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_settings' => 0,
    'menu_settings_v' => 0,
    'horizontal_menu' => 0,
    'tab' => 0,
    'innertab' => 0,
    'element' => 0,
    'mobile_menu_style' => 0,
    'mobile_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0522730e8_73406067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0522730e8_73406067')) {function content_63e0c0522730e8_73406067($_smarty_tpl) {?>



	<div  class="iqitmegamenu-wrapper cbp-hor-width-<?php echo $_smarty_tpl->tpl_vars['menu_settings']->value['hor_width'];?>
  clearfix">
		<div id="iqitmegamenu-horizontal<?php if (isset($_smarty_tpl->tpl_vars['menu_settings_v']->value)&&($_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==6)) {?>-sidebar<?php }?>" class="col-xs-12 iqitmegamenu <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_s_transparent']&&$_smarty_tpl->tpl_vars['menu_settings']->value['hor_sticky']) {?> cbp-sticky-transparent<?php }?>" role="navigation">
			<div class="container">
				
				<?php if (isset($_smarty_tpl->tpl_vars['menu_settings_v']->value)&&($_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==2||$_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==3)) {?>

					<div class="cbp-vertical-on-top <?php if ($_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==2) {?>cbp-homepage-expanded<?php }?>">
						<?php echo $_smarty_tpl->getSubTemplate ("./iqitmegamenu_vertical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ontop'=>1), 0);?>
  
					</div>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['menu_settings_v']->value)&&($_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==6)) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("./iqitmegamenu_vertical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notitle'=>1), 0);?>
 
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterIqitMegamenu'),$_smarty_tpl);?>

				<?php } else { ?> 
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterIqitMegamenu'),$_smarty_tpl);?>

				<nav id="cbp-hrmenu" class="cbp-hrmenu cbp-horizontal <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_width']||$_smarty_tpl->tpl_vars['menu_settings']->value['hor_sw_width']) {?>cbp-hrsub-narrow<?php }?> <?php if (!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_sw_width']) {?>cbp-hrsub-wide<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_animation']==1) {?>cbp-fade<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_animation']==2) {?>cbp-fade-slide-bottom<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_animation']==3) {?>cbp-fade-slide-top<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_s_arrow']) {?>cbp-arrowed<?php }?> <?php if (!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_arrow']) {?> cbp-submenu-notarrowed<?php }?> <?php if (!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_arrow']) {?> cbp-submenu-notarrowed<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_center']) {?> cbp-menu-centered<?php }?> ">
					<ul>
						<li class="li-logo"> <a href="/"> <img src="/img/logo_header.svg" alt="Dami Domo"> </a></li>
						<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['horizontal_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
						<li class="cbp-hrmenu-tab cbp-hrmenu-tab-<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
 <?php if ($_smarty_tpl->tpl_vars['tab']->value['active_label']) {?> cbp-onlyicon<?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['float']) {?> pull-right cbp-pulled-right<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['tab']->value['url_type']==2) {?><a role="button" class="cbp-empty-mlink"><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['tab']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['tab']->value['new_window']) {?>target="_blank"<?php }?>><?php }?>
								

								<span class="cbp-tab-title"><?php if ($_smarty_tpl->tpl_vars['tab']->value['icon_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['icon_class'])) {?> <i class="<?php echo $_smarty_tpl->tpl_vars['tab']->value['icon_class'];?>
 cbp-mainlink-icon"></i><?php }?>

								
									<?php if (!$_smarty_tpl->tpl_vars['tab']->value['active_label']) {?><?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']) {?> <i class="icon-angle-down cbp-submenu-aindicator"></i><?php }?></span>
								<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['label'])) {?><span class="label cbp-legend cbp-legend-main"><?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['legend_icon'])) {?> <i class="<?php echo $_smarty_tpl->tpl_vars['tab']->value['legend_icon'];?>
 cbp-legend-icon"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>

								<span class="cbp-legend-arrow"></span></span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?><span class="cbp-triangle-container"><span class="cbp-triangle-top"></span><span class="cbp-triangle-top-back"></span></span><?php }?>
						</a>
							<?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
							<div class="cbp-hrsub col-xs-<?php echo $_smarty_tpl->tpl_vars['tab']->value['submenu_width'];?>
">
								<div class="cbp-hrsub-inner">
									<?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_s_width']&&!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_width']&&!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_sw_width']) {?><div class="container"><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']==1) {?>
									<div class="container-xs-height cbp-tabs-container">
									<div class="row row-xs-height">
									<div class="col-xs-2 col-xs-height">
										<ul class="cbp-hrsub-tabs-names cbp-tabs-names">
											<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs'])) {?>
											<?php  $_smarty_tpl->tpl_vars['innertab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['innertab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['innertab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['innertab']->key => $_smarty_tpl->tpl_vars['innertab']->value) {
$_smarty_tpl->tpl_vars['innertab']->_loop = true;
 $_smarty_tpl->tpl_vars['innertab']->index++;
 $_smarty_tpl->tpl_vars['innertab']->first = $_smarty_tpl->tpl_vars['innertab']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['innertabsnames']['first'] = $_smarty_tpl->tpl_vars['innertab']->first;
?>
											<li class="innertab-<?php echo $_smarty_tpl->tpl_vars['innertab']->value->id;?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['innertabsnames']['first']) {?>active<?php }?>">
												<a href="#<?php echo $_smarty_tpl->tpl_vars['innertab']->value->id;?>
-innertab-<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
" <?php if ($_smarty_tpl->tpl_vars['innertab']->value->url_type!=2) {?> data-link="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->url;?>
" <?php }?>>
												<?php if ($_smarty_tpl->tpl_vars['innertab']->value->icon_type&&!empty($_smarty_tpl->tpl_vars['innertab']->value->icon_class)) {?> <i class="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->icon_class;?>
 cbp-mainlink-icon"></i><?php }?>
												<?php if (!$_smarty_tpl->tpl_vars['innertab']->value->icon_type&&!empty($_smarty_tpl->tpl_vars['innertab']->value->icon)) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->icon;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->title;?>
" class="cbp-mainlink-iicon" /><?php }?>
												<?php echo $_smarty_tpl->tpl_vars['innertab']->value->title;?>
 
												<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->label)) {?><span class="label cbp-legend cbp-legend-inner"><?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->legend_icon)) {?> <i class="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->legend_icon;?>
 cbp-legend-icon"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['innertab']->value->label;?>

												<span class="cbp-legend-arrow"></span></span><?php }?>
											</a><i class="icon-angle-right cbp-submenu-it-indicator"></i><span class="cbp-inner-border-hider"></span></li>
											<?php } ?>
											<?php }?>
										</ul>	
									</div>
								
												<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs'])) {?>
											<?php  $_smarty_tpl->tpl_vars['innertab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['innertab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['innertab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['innertab']->key => $_smarty_tpl->tpl_vars['innertab']->value) {
$_smarty_tpl->tpl_vars['innertab']->_loop = true;
 $_smarty_tpl->tpl_vars['innertab']->index++;
 $_smarty_tpl->tpl_vars['innertab']->first = $_smarty_tpl->tpl_vars['innertab']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['innertabscontent']['first'] = $_smarty_tpl->tpl_vars['innertab']->first;
?>
											<div role="tabpanel" class="col-xs-10 col-xs-height tab-pane cbp-tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['innertabscontent']['first']) {?>active<?php }?> innertabcontent-<?php echo $_smarty_tpl->tpl_vars['innertab']->value->id;?>
"  id="<?php echo $_smarty_tpl->tpl_vars['innertab']->value->id;?>
-innertab-<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
">

												<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?>
												<div class="clearfix">
												<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['innertab']->value->submenu_content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
												<?php echo $_smarty_tpl->getSubTemplate ("./front_submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0);?>
               
												<?php } ?>
												</div>
												<?php }?>

											</div>
											<?php } ?>
											<?php }?>
									</div></div>
									<?php } else { ?>

										<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
											<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
											<?php echo $_smarty_tpl->getSubTemplate ("./front_submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0);?>
               
											<?php } ?>
										<?php }?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['menu_settings']->value['hor_s_width']&&!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_width']&&!$_smarty_tpl->tpl_vars['menu_settings']->value['hor_sw_width']) {?></div><?php }?>
								</div>
							</div>
							<?php }?>
						</li>
						<?php } ?>
					</ul>
				</nav>
				<?php }?>

				
				

				
			</div>
			<div id="iqitmegamenu-mobile">
				
				<div class="cbp-mobilesubmenu">
					<div class="container">
						<div id="iqitmegamenu-accordion">
							<ul class="<?php if ($_smarty_tpl->tpl_vars['mobile_menu_style']->value) {?>iqitmegamenu-accordion<?php } else { ?>cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left<?php }?>">
								<?php if (!$_smarty_tpl->tpl_vars['mobile_menu_style']->value) {?>
									<li id="cbp-close-mobile"> <i class="icon-chevron-left"></i>
										<?php echo smartyTranslate(array('s'=>'Hide','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

									</li>
								<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['mobile_menu']->value;?>

							</ul>
							<div class="hide-me"></div>
						</div>
					</div>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['mobile_menu_style']->value) {?>
					<div id="cbp-spmenu-overlay" class="cbp-spmenu-overlay"></div>
				<?php }?>
			</div>
		</div>
	</div>
<?php }} ?>
