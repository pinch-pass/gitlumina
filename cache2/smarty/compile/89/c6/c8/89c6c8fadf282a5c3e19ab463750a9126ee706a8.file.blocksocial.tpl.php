<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60199201463e0c0524bd527-62536312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c6c8fadf282a5c3e19ab463750a9126ee706a8' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/modules/blocksocial/blocksocial.tpl',
      1 => 1675407976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60199201463e0c0524bd527-62536312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'twitter_url' => 0,
    'facebook_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'rss_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0524d3728_82113125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0524d3728_82113125')) {function content_63e0c0524d3728_82113125($_smarty_tpl) {?>

<section id="social_block">


<!--<div class="title-store"><?php echo smartyTranslate(array('s'=>'Modula','mod'=>'blocksocial'),$_smarty_tpl);?>
</div>
<hr class="active break">
<div class="list-footer"><?php echo smartyTranslate(array('s'=>'Write your own text here about your store','mod'=>'blocksocial'),$_smarty_tpl);?>
</div> -->


	<ul>
    
         <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
			<li class="twitter">
				<a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8');?>
">
					<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
        
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
			<li class="facebook">
				<a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8');?>
">
					<span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
        	<li class="youtube">
        		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8');?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
        	<li class="google-plus">
        		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8');?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
        	<li class="pinterest">
        		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8');?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
			<li class="rss">
				<a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['rss_url']->value,'html','UTF-8');?>
">
					<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
			<li class="instagram">
				<a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8');?>
">
					<span><?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>

	</ul>
    
</section>

<?php }} ?>
