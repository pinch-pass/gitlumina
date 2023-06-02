<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155198686863e0c052475987-62549234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1a2fe43b27d62e80681f79b94d48581a0da2b4' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/themes/modula/footer.tpl',
      1 => 1675430757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155198686863e0c052475987-62549234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'shop_name' => 0,
    'img_dir' => 0,
    'modules_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0524831a7_87216730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0524831a7_87216730')) {function content_63e0c0524831a7_87216730($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>

</div>

<!-- #center_column -->

<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
<?php }?>

</div>

<!-- .row -->

</div>

<!-- #columns -->

</div>

<!-- .columns-container -->

<!-- Footer -->

<div class="footer-container">

<footer id="footer"  class="container">
<div class="row">

<div class="catalog">
<?php echo $_smarty_tpl->getSubTemplate ('./footer_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<div class="about-block">
<?php echo $_smarty_tpl->getSubTemplate ('./footer_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<div class="help">
<?php echo $_smarty_tpl->getSubTemplate ('./footer_3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>



<div class="adress-block">
<?php echo $_smarty_tpl->getSubTemplate ('./footer_4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>


</div>
<?php echo $_smarty_tpl->getSubTemplate ('./footer_5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

</footer>

</div>
<div class="after-footer"><div class="container"><?php echo $_smarty_tpl->getSubTemplate ('./footer_6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div>
<div class="post-footer-container">

<div id="post-footer"  class="container">


<a href="/"><img class="ld_logo_bottom" src="/img/logo_header.svg" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['shop_name']->value,'html','UTF-8');?>
"></a>
<p class="rights"><?php echo smartyTranslate(array('s'=>'© 2008-2022 - Lumina Deco - Все права защищены'),$_smarty_tpl);?>
</p>
	<p class="creator">
		Разработка сайта <a href="//www.blancy.ru"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Blancy.svg" alt="Blancy" /> Blancy</a>
	</p>

</div>

</div>

<!-- #footer -->

</div>
<div id="call-pop">  
<div id="mod-bg-call"> </div>
    <div class="product__modal" id="sew-by-call-modal">
        <button class="btn-close-modal" type="button" id="primaryButtones"></button>
        <div class="sew-by-order">
             <div class="owner-feedbacks__success visuallyhidden"style="margin: 0 auto;">
                 <p class="sew-by-order__heading">Ваша заявка принята!</p>
                 <p class="sew-by-order__desc">В ближайшее время с Вами свяжеться наш менеджер!</p>
                 <img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
pfspreorder/views/img/check-mark.svg"/>
                 <button class="sew-by-order__button" id="thirdButton" type="submit" >Продолжить покупки</button>
            </div>
            <form class="sew-by-order__form" id="form-3">
                <input class="visuallyhidden" name="formname" type="hidden" value="Обратный звонок">
                <p class="sew-by-order__heading">Обратный звонок</p>
                <p class="sew-by-order__desc"></p>
                
                <label class="sew-by-order__label sew-by-order__label--100"><span>Ваше имя<span>*</span></span>
                    <input class="sew-by-order__input success" type="text" name="name"
                           placeholder="Ваше имя" required>
                </label>
                <label class="sew-by-order__label sew-by-order__label--100"><span>Контактный телефон<span>*</span></span>
                    <input class="sew-by-order__input sew-by-order__input--100" type="text" name="phone" placeholder="Контактный телефон*" required>
                </label>

                <div class="modal-check">
                    <input type="checkbox" name="personal" value="value-1" onchange="document.getElementById('lowers').disabled = !this.checked;">
                    <p>Я ознакомился и принимаю условия <a href="/content/16-politika-konfidentsialnosti" target="_blank">“Политики конфиденциальности”</a> и <a href="/content/16-politika-konfidentsialnosti" target="_blank">“Пользовательского соглашения“</a> </p>
                </div>
                <button class="sew-by-order__button" type="submit" id="lowers">Отправить</button>
            </form>
        </div>
    </div>


</div>
<!-- #page -->

<?php }?>

<script>
$("a.grouped_elements").attr("rel", "group1");
$("a.grouped_elements2").attr("rel", "group2");
$("a.grouped_elements").fancybox();
$("a.grouped_elements2").fancybox();
</script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto&amp;subset=cyrillic,cyrillic-ext&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Lato:900|Open+Sans|Poppins:300,400,500,600,700|Roboto&amp;subset=latin-ext&display=swap" rel="stylesheet">

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Cookies -->
    <!-- 
        Skrypt stworzonyi  zainstalowany przez Grzegorz Zawadzki <kontakt@seigi.eu>
    -->
    <div id="cookieinfo" style="visibility:hidden;display:none;">
        <?php echo smartyTranslate(array('s'=>'Wyrażam zgodę na przetwarzanie danych osobowych na zasadach określonych w'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['link']->value->getCMSLink(16),'html','UTF-8');?>
?content_only=1" title="" class="iframe" rel="nofollow"><?php echo smartyTranslate(array('s'=>"polityce prywatności"),$_smarty_tpl);?>
</a><?php echo smartyTranslate(array('s'=>', Jeśli nie wyrażasz zgody na wykorzystywanie cookies we wskazanych w niej celach, w tym do profilowania, prosimy o wyłącznie cookies w przeglądarce lub opuszczenie serwisu.'),$_smarty_tpl);?>
 <b><a href="#" style="color: #fff;" onclick="javascript: return closeCookieInfo();">[<?php echo smartyTranslate(array('s'=>'Akceptuję'),$_smarty_tpl);?>
]</a>
        <noscript><br><?php echo smartyTranslate(array('s'=>'Aby zamknąć to okno, musisz mieć włączoną obsługę javascript'),$_smarty_tpl);?>
</noscript>
        </b>
    </div>
    
    <script type="text/javascript">
    // 
        function closeCookieInfo(){var e=document.getElementById("cookieinfo");e.style.display="none";setCookie("cookieinfoaccepted","1",180);return false}function setCookie(e,t,n){var r=new Date;r.setDate(r.getDate()+n);var i=escape(t)+(n==null?"":"; expires="+r.toUTCString());document.cookie=e+"="+i+"; path=/"}function getCookie(e){var t=document.cookie;var n=t.indexOf(" "+e+"=");if(n==-1){n=t.indexOf(e+"=")}if(n==-1){t=null}else{n=t.indexOf("=",n)+1;var r=t.indexOf(";",n);if(r==-1){r=t.length}t=unescape(t.substring(n,r))}return t}if(getCookie("cookieinfoaccepted")=="1")closeCookieInfo()
    // 
    </script>
<!-- EOF: Cookies -->
<script>
if ($(window).width() > 767) {
	$(document).ready(function() {
		var stickyNavTop = $('#stickynav').offset().top;

		var stickyNav = function() {
			var scrollTop = $(window).scrollTop();

			if (scrollTop > stickyNavTop) {
				$('#page').addClass('sticky');
				$('body').addClass('sticky_fix');
			} else {
				$('#page').removeClass('sticky');
				$('body').removeClass('sticky_fix');
			}
		};

		stickyNav();
		$(window).scroll(function() {
			stickyNav();
		});
	});
}
</script>
<script>
if ($(window).width() < 767) {
		$('#category_description_short').css('display', 'block')
		$('#category_description_long').css('display', 'none')
	}

</script>
<script>
$(function() {
  if (window.self != window.top) {
    $(document.body).addClass("in-iframe");
  }
});
</script>
<script type="text/javascript">
	$(".product_img_link").hover(
	function () {
		$(this).find('.img_second').toggle();
		$(this).find('.img_first').toggle();
	},
	function () {
		$(this).find('.img_second').toggle();
		$(this).find('.img_first').toggle();
	}
	);

$(document).ready(function() {
	if (typeof mywishlist_count != 'undefined' && mywishlist_count > 0) {
		$('.link-img-wishlist span').text(mywishlist_count);
	} else {
		$('.link-img-wishlist span').text('0');
	}
	$('.btn1-calling').modal();
})
</script>
  
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

</body>
</html><?php }} ?>
