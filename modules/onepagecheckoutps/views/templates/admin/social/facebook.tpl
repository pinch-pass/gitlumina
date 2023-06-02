{*
* We offer the best and most useful modules PrestaShop and modifications for your online store.
*
* We are experts and professionals in PrestaShop
*
* @category  PrestaShop
* @category  Module
* @author    PresTeamShop.com <support@presteamshop.com>
* @copyright 2011-2018 PresTeamShop
* @license   see file: LICENSE.txt
*}
<div>
    {l s='Go to the' mod='onepagecheckoutps'}
    <a target="_blank" href="{$paramsBack.MODULE_DIR|escape:'htmlall':'UTF-8'}docs/index_{if $paramsBack.ISO_LANG eq 'es'}es{else}en{/if}.html#tab_facebook">{l s='user guide' mod='onepagecheckoutps'}</a> >
    {l s='option "How to create a Facebook application?"' mod='onepagecheckoutps'}
    <br/><br/>

    <b>* {l s='Site URL' mod='onepagecheckoutps'}</b>:
    <input class="disabled" style="width: 100%;" type="text" onclick="this.focus();this.select();" value="{$paramsBack.LINK->getPageLink('index', false)|escape:'htmlall':'UTF-8'}"></input>

    <b>* {l s='App Domains' mod='onepagecheckoutps'}</b>:
    <input class="disabled" style="width: 100%;" type="text" onclick="this.focus();this.select();" value="{$paramsBack.SHOP->domain|escape:'htmlall':'UTF-8'}"></input>

    <b>* {l s='Valid OAuth Redirect URIs' mod='onepagecheckoutps'}:</b>
    <br />
    {foreach $paramsBack.LANGUAGES item='language'}
        <input type="text" value="{$paramsBack.LINK->getModuleLink('onepagecheckoutps', 'login', ['sv' => 'Facebook'], null, $language.id_lang)|escape:'htmlall':'UTF-8'}"/>
    {/foreach}
</div>