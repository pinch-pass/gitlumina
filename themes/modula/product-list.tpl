{*
* 2007-2014 PrestaShop
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
*  @author PrestaShop SA
<contact@prestashop.com>
	*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($products) && $products}
	{*define numbers of product per line in other page for desktop*}
	{if $page_name !='index' && $page_name !='product'}
		{assign var='nbItemsPerLine' value=3}
		{assign var='nbItemsPerLineTablet' value=2}
		{assign var='nbItemsPerLineMobile' value=3}
	{else}
		{assign var='nbItemsPerLine' value=4}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}
	{/if}
	{*define numbers of product per line in other page for tablet*}
	{assign var='nbLi' value=$products|@count}
	{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
	{math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
	<!-- Products list -->

	<ul{if isset($id) && $id} id="{$id}"{else} id="product_list"{/if} class="product_list grid row{if isset($class) && $class} {$class}{/if}{if isset($active) && $active == 1} active{/if}">
		{foreach from=$products item=product name=products}
{math equation="(total%perLine)" total=$smarty.foreach.products.total perLine=$nbItemsPerLine assign=totModulo}
{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineMobile assign=totModuloMobile}
{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
{if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
{if $totModuloMobile == 0}{assign var='totModuloMobile' value=$nbItemsPerLineMobile}{/if}
		<!-- MODULE Home Featured Products -->

		<li class="ajax_block_product{if $page_name == 'index' || $page_name == 'product'} col-xs-6 col-sm-4 col-md-3{else} col-xs-6 col-sm-4 col-md-4{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLine == 1} first-in-line{/if}{if $smarty.foreach.products.iteration >
			($smarty.foreach.products.total - $totModulo)} last-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}{if $smarty.foreach.products.iteration > ($smarty.foreach.products.total - $totModuloMobile)} last-mobile-line{/if} animated pulse" style="visibility: visible;">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="sp-icons">
                    {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
						<div class="product-box_discount">- {100 - ($product.price * 100 / $product.price_without_reduction)|string_format:"%d"} {l s='%'}</div>
						<!-- 100 - (500*100/1890) -->
                    {/if}
                    {if isset($product.new) && $product.new == 1}
						<div class="new-box">
							Новинка
						</div>
                    {/if}
				</div>
				<div class="left-block1">
					<div class="view view-fifth">

						<figure class="effect-zoe">
							<div class="product-image-container">
                                {if $product.specific_prices.reduction_type == 'percentage'}
									<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
                                {/if}

                                {assign var='productImgs' value=Product::getProductImages($product.id_product)}
                                {assign var='coverImg' value=Product::getCover($product.id_product)}

								<ul class="prod-slide owl-carousel prod-{$productImgs|@count}">
									<li><a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" itemprop="url">{include file="$tpl_dir./img_tag.tpl" img_url=$link->getImageLink($product.link_rewrite, $coverImg.id_image, 'home_default')|escape:'html':'UTF-8' img_alt=$product.legend img_attributes=$image_sizes}</a></li>
                                    {foreach from=$productImgs item=productImg name=productImgs}
                                        {if ($productImg.id_image != $coverImg.id_image)}
                                            {assign var=imageIds value="`$product.id_product`-`$productImg.id_image`"}
											<li><a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" itemprop="url">{include file="$tpl_dir./img_tag.tpl" img_url=$link->getImageLink($product.link_rewrite, $imageIds, 'home_default')|escape:'html':'UTF-8' img_alt=$product.legend img_attributes=$image_sizes}</a></li>
                                        {/if}
                                    {/foreach}
								</ul>

                                {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
									<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
										<meta itemprop="priceCurrency" content="{$priceDisplay}" />
										<div class="all-prices">
                                            {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
												<span class="old-price product-price">{displayWtPrice p=$product.price_without_reduction}</span>
                                            {/if}
											<span itemprop="price" class="price product-price">
                                                {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
											</span>
                                            {/if}
										</div>
									</div>
                                {/if}
								<figcaption>



									<div class="functional-buttons clearfix">
                                        {hook h='displayProductListFunctionalButtons' product=$product}
                                        {if isset($comparator_max_item) && $comparator_max_item}
										<div class="quickview">
                                            {if isset($quick_view) && $quick_view}
												<a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Quick view'}" rel="{$product.link|escape:'html':'UTF-8'}"></a>
                                            {/if}
										</div>
                                        {/if}


									</div>

								</figcaption>

							</div>

						</figure>

					</div>
				</div>

				<div class="right-block">
                    {if isset($product.color_list)}
						<div class="color-list-container">{$product.color_list}</div>
                    {/if}

                    {if (!$PS_CATALOG_MODE && $PS_STOCK_MANAGEMENT && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                        {if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}

							<span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                {if ($product.allow_oosp || $product.quantity > 0)}
									<span class="{if $product.quantity <= 0}out-of-stock{else}available-now{/if}">

										<link itemprop="availability" href="http://schema.org/InStock" />
                                        {if $product.quantity
                                        <= 0}{if $product.allow_oosp}{$product.available_later}{else}{l s='Out of stock'}{/if}{else}{if isset($product.available_now) && $product.available_now}{$product.available_now}{else}{l s='In Stock'}{/if}{/if}

									</span>
                                {elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" />
                                        {l s='Product available with different options'}
									</span>
                                {else}
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" />
                                        {l s='Out of stock'}
									</span>
                                {/if}
							</span>

                            {hook h='displayProductListReviews' product=$product}
							<p class="reference">Артикул: <span>{$product.reference}</span></p>
							<div class="producth5title" itemprop="name">
                                {if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
								<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" itemprop="url" >{$product.name|escape:'html':'UTF-8'}</a>
							</div>

							<div class="product-flags">
                                {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                                    {if isset($product.online_only) && $product.online_only}
										<span class="online_only">{l s='Online only'}</span>
                                    {/if}
                                {/if}
                                {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
                                {elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
									<span class="discount"></span>
                                {/if}
							</div>


							<p class="product-desc" itemprop="description">
                                {$product.description_short|strip_tags:'UTF-8'|truncate:350:' ...'}
							</p>

                            {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
                                        <meta itemprop="priceCurrency" content="{$priceDisplay}" />
                                        {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
                                            <span class="old-price product-price">{displayWtPrice p=$product.price_without_reduction}</span>
                                        {/if}
                                        <span itemprop="price" class="price product-price">{convertPrice price=$product.price}</span>
                                    {/if}

                                    <div class="price_sub">
                                        {if $product.quantity > 0}
                                            <i class="avail"></i> {l s='В наличии'}
                                        {else}
                                            <i class="avail_not"></i> {l s='Нет в наличии'}
                                        {/if}
                                    </div>
                                </div>
                            {/if}

							<div class="button-container">
                                {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity
                                <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                                    {if ($product.allow_oosp || $product.quantity >
                                    0)}
                                        {hook h="displayQuickOrderButton" product=$product}
                                        {if isset($static_token)}
											<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                                            getPageLink('cart',true, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
												<div class="icone"> <i class="icon icon-shopping-cart left"></i>
													<span>{l s='Add to cart'}</span>
												</div>
											</a>
                                        {else}
											<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                                            getPageLink('cart',true, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
												<div class="icone"> <i class="icon icon-shopping-cart left"></i>
													<span>{l s='Add to cart'}</span>
												</div>
											</a>
                                        {/if}
                                    {else}
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<div class="icone">
												<i class="icon icon-shopping-cart left"></i>
												<span>{l s='Add to cart'}</span>
											</div>

										</span>
                                    {/if}
                                {/if}
							</div>
                        {/if}
                    {/if}
				</div>

{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
							<span class="sale-box">
								<span class="sale-label"></span>
							</span>
							{/if}


						</div>

						<!-- .product-container>--></li>
					{/foreach}
				</ul>
				{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}

<script>
    productOwl();
</script>