<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44840846763e0c0524ab4d0-31742440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48951f539fa4f08609cfdbbbbb41898f15bde2f1' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer_4.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44840846763e0c0524ab4d0-31742440',
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
  'unifunc' => 'content_63e0c0524b28e5_90060480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0524b28e5_90060480')) {function content_63e0c0524b28e5_90060480($_smarty_tpl) {?><div class="footer-menu h4"><?php echo smartyTranslate(array('s'=>"Адреса магазинов"),$_smarty_tpl);?>
</div>
	<div class="adresess ">
		<ul>
			<li class="adress-shops"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="gps" /><a href="/magaziny" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"г. Москва, Рязанский проспект, д.2, к.3, 1-й этаж, павильон 111 (ТЦ Декоратор)"),$_smarty_tpl);?>
</a><img class="tog-ar" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Arrow.svg" alt="Arrow" />
            <ul>
            <span class="ul-arrow"></span>
            	<li><a href="/magaziny" title="" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="gps" /><?php echo smartyTranslate(array('s'=>"г. Москва, Киевское шоссе, 23-й км, д.8, стр.1, 3-й этаж (ТЦ Family Room)"),$_smarty_tpl);?>
</a></li>
                <li><a href="/magaziny" title="" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="gps" /><?php echo smartyTranslate(array('s'=>"г. Москва, Ленинградское шоссе, д.25, 4-й этаж, павильон 4F06"),$_smarty_tpl);?>
</a></li>
                
                <li><a href="/magaziny" title="" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="gps" /><?php echo smartyTranslate(array('s'=>"г. Москва, МКАД, 47-й километр, вл31с1 (ТЦ Лента)"),$_smarty_tpl);?>
</a></li>
            </ul>
            </li>
            <b>Адрес склада:</b>
			<li class="adress-sklad"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
gps.svg" alt="gps" />
            <a title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"г. Долгопрудный, Лихачевский проспект, д.18"),$_smarty_tpl);?>
</a></li>
		</ul>
	</div>
<div class="footer-menu h4 two"><?php echo smartyTranslate(array('s'=>"Контакты"),$_smarty_tpl);?>
</div>
<ul class="contacts">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink(14);?>
" title="" rel="nofollow"><?php echo smartyTranslate(array('s'=>"Часто задаваемые вопросы"),$_smarty_tpl);?>
</a></li>
    <li class="contact-tel"> <a  class="icon-bg left" href="tel:84951201827"><span class="phone-icon icon" >    8 (495) 120-18-27</span></a><a style="font-weight:500;" href="tel:88005002123">8 (800) 500-21-23</a></li>
    <li class="contact-mail"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
mail.svg" alt="mail" /><a target="_blank" href="mailto:info@luminadecoshop.ru" title="" rel="nofollow">info@luminadecoshop.ru</a></li>
</ul>  <?php }} ?>
