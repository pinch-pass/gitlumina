{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $smarty.const._PS_VERSION_ >= 1.6}
	
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module paypal">
        	{if $use_paypal_in_context}
				<a href="javascript:void(0)" onclick="" id="paypal_process_payment">
			{else}
				<a href="javascript:$('#paypal_payment_form_payment').submit();">
			{/if}
				{* {if isset($use_mobile) && $use_mobile}
					<img src="{$base_dir_ssl|escape:'htmlall':'UTF-8'}modules/paypal/views/img/logos/express_checkout_mobile/CO_{$PayPal_lang_code|escape:'htmlall':'UTF-8'}_orange_295x43.png" />
				{else} *}
					
                    {if isset($braintreeToken)}
                    {l s='Pay with PayPal' mod='paypal'}
                    {else}
					{l s='Pay with your card or your PayPal account' mod='paypal'}
                    {/if}
				{* {/if} *}

			</a>
		</p>
    </div>
</div>

<style>
	p.payment_module.paypal > a {
	{if isset($logos.LocalPayPalHorizontalSolutionPP) && $PayPal_payment_method == $PayPal_integral}
		background: white url('{$logos.LocalPayPalHorizontalSolutionPP|escape:'htmlall':'UTF-8'}') 15px 23px no-repeat; 
	{else}
		background: white url('{$logos.LocalPayPalLogoMedium|escape:'htmlall':'UTF-8'}') 15px 23px no-repeat; 
	{/if}
	}
	p.payment_module.paypal a
	{ldelim}
		padding-left:125px;
	{rdelim}
</style>
{else}
<p class="payment_module">
		<a href="javascript:void(0)" id="paypal_process_payment">
		{* {if isset($use_mobile) && $use_mobile}
			<img src="{$base_dir_ssl|escape:'htmlall':'UTF-8'}modules/paypal/views/img/logos/express_checkout_mobile/CO_{$PayPal_lang_code|escape:'htmlall':'UTF-8'}_orange_295x43.png" />
		{else} *}
			{if isset($logos.LocalPayPalHorizontalSolutionPP) && $PayPal_payment_method == $PayPal_integral}
				<img src="{$logos.LocalPayPalHorizontalSolutionPP|escape:'htmlall':'UTF-8'}" alt="{l s='Pay with your card or your PayPal account' mod='paypal'}" height="48px" />
			{else}
				<img src="{$logos.LocalPayPalLogoMedium|escape:'htmlall':'UTF-8'}" alt="{l s='Pay with your card or your PayPal account' mod='paypal'}" />
			{/if}
			{l s='Pay with your card or your PayPal account' mod='paypal'}
        {* {/if} *}
	</a>
</p>

{/if}


{if $use_paypal_in_context}
	<input type="hidden" id="in_context_checkout_enabled" value="1">
{else}
<script>
    $(document).ready(function(){
        $(document).on('click', '#paypal_process_payment', function(){
            $('#paypal_payment_form_payment').submit();
        });
    });
</script>
{/if}
<form id="paypal_payment_form_payment" class="paypal_payment_form" action="{$base_dir_ssl|escape:'htmlall':'UTF-8'}modules/paypal/express_checkout/payment.php" data-ajax="false" method="post">
	<input type="hidden" name="express_checkout" value="{$PayPal_payment_type|escape:'htmlall':'UTF-8'}"/>
	<input type="hidden" name="current_shop_url" value="{$PayPal_current_page|escape:'htmlall':'UTF-8'}" />
	<input type="hidden" name="bn" value="{$PayPal_tracking_code|escape:'htmlall':'UTF-8'}" />
</form>