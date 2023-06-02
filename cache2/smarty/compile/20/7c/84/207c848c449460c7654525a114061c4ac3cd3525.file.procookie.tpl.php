<?php /* Smarty version Smarty-3.1.19, created on 2023-02-06 11:54:42
         compiled from "/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/procookie/views/templates/hook/procookie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97835821263e0c0521f0be0-88080614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '207c848c449460c7654525a114061c4ac3cd3525' => 
    array (
      0 => '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/modules/procookie/views/templates/hook/procookie.tpl',
      1 => 1672139476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97835821263e0c0521f0be0-88080614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'occ_css' => 0,
    'occ_bar_auto_close_time' => 0,
    'occ_test_mode' => 0,
    'occ_bar_position' => 0,
    'occ_timeout' => 0,
    'occ_bar_url' => 0,
    'occ_bar_read_more_text' => 0,
    'occ_bar_close_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63e0c0521f70f2_04207542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e0c0521f70f2_04207542')) {function content_63e0c0521f70f2_04207542($_smarty_tpl) {?>
<style type="text/css">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['occ_css']->value,'htmlall');?>

</style>

<script type="text/javascript">


setTimeout(function() {
    $(function(){
        var auto_time = <?php echo $_smarty_tpl->tpl_vars['occ_bar_auto_close_time']->value;?>
 * 1000,
            test_mode = <?php echo $_smarty_tpl->tpl_vars['occ_test_mode']->value;?>
;

        if(test_mode == 1 && $.cookie('procookie')) {
            $.cookie('procookie', null);
        }

        function cookieanimate() {
            var position = <?php echo $_smarty_tpl->tpl_vars['occ_bar_position']->value;?>
;

            if($.cookie('procookie') == 1) {
                return false;
            }

            if($(".procookie").is(":visible") ) {
                if(position == 1) {
                    $('.procookie').hide();
                } else {
                    $('.procookie').hide();
                }
            } else if (!$(".procookie").hasClass("closed")) {
                if(position == 1) {
                    $('.procookie').show();
                } else {
                    $('.procookie').show();
                }
            }
        }

        if ($.cookie('procookie') != 1) {
            cookieanimate();
        }

        $(".procookie-close").click(function(){
            cookieanimate();
            if(test_mode == 0) {
                $.cookie('procookie', '1', { expires: <?php echo $_smarty_tpl->tpl_vars['occ_timeout']->value;?>
, path: '/'});
            }
            $(".procookie").addClass("closed");
        });

        if(auto_time > 0) {
            setTimeout(cookieanimate, auto_time);
        }
    });
}, 3001);


</script>

<div style="display: none" class="procookie">
    <img src="/themes/modula/img/cookie.png" alt="">
    <span>Мы используем файлы <a href="/content/16-politika-konfidentsialnosti" target="_blank">cookies</a>, чтобы улучшить сайт для Вас</span>
    <?php if ($_smarty_tpl->tpl_vars['occ_bar_url']->value!='') {?><a class="procookie-more" href="<?php echo $_smarty_tpl->tpl_vars['occ_bar_url']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['occ_bar_read_more_text']->value,'htmlall');?>
</a><?php }?>
    <a class="procookie-close"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->escapePTS($_smarty_tpl->tpl_vars['occ_bar_close_text']->value,'htmlall');?>
</a>
</div>
<?php }} ?>
