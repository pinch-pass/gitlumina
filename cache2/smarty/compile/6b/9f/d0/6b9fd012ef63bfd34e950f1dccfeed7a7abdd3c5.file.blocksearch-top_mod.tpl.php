<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/blocksearch_mod/blocksearch-top_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15591176663e0c052450048-67414731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9fd012ef63bfd34e950f1dccfeed7a7abdd3c5' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/blocksearch_mod/blocksearch-top_mod.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15591176663e0c052450048-67414731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'link' => 0,
    'search_query' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c05245c074_58939060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c05245c074_58939060')) {function content_63e0c05245c074_58939060($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==2||$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==3)) {?>

<?php } else { ?>

		<!-- Block search module TOP -->
		<div class="search container">
		
			
			
				<form  class="search__form" method="get" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true),'html','UTF-8');?>
" id="searchbox">
					<input type="hidden" name="controller" value="search" />
					<input type="hidden" name="orderby" value="position" />
					<input type="hidden" name="orderway" value="desc" />

					<input class="search__input search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Искать товары...','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" value="<?php echo stripslashes($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8'));?>
" />
					
					<div class="search_query_container <?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>search-w-selector<?php }?>">

					<?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>

					<div class="search-cat-selector search__category">
						<select class="form-control search-cat-select" name="search_query_cat" style="width: 100%;">
							<option class="search__category-heading" value="0"><?php echo smartyTranslate(array('s'=>'Категории','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
									<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0);?>

							<?php } ?>
						</select>
					</div>
					<?php } else { ?>
					<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
					<?php }?>
					</div>

					<button type="submit" name="submit_search" class="search__btn">
						<img class="search__btn-img" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
search.svg" alt="icon search" width="20" height="20">
						<span class="search__btn-title">Найти</span>
					</button>

				</form>
		</div>

<?php }?>

	<!-- /Block search module TOP --><?php }} ?>
