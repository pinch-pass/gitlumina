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

<style>
    {literal}
    #order_step, #order_steps, div.order_delivery{
        display:none;
    }
    {/literal}
    {if isset($paramsFront.CONFIGS.OPC_THEME_BACKGROUND_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_BACKGROUND_COLOR)}
        div#onepagecheckoutps div#onepagecheckoutps_contenedor,
        div#onepagecheckoutps div#onepagecheckoutps_header {ldelim}
            background: {$paramsFront.CONFIGS.OPC_THEME_BACKGROUND_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR)}
        div#onepagecheckoutps #onepagecheckoutps_contenedor,
        div#onepagecheckoutps div#onepagecheckoutps_header {ldelim}
            border: 1px solid {$paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
        {*#onepagecheckoutps #opc_social_networks {ldelim}
            border-bottom: 1px solid {$paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}*}
        div#onepagecheckoutps div#onepagecheckoutps_step_review #order-detail-content .image_zoom{ldelim}
            border: 2px solid {$paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_ICON_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_ICON_COLOR)}
        div#onepagecheckoutps .onepagecheckoutps_p_step i.fa-pts {ldelim}
            color: {$paramsFront.CONFIGS.OPC_THEME_ICON_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
        div#onepagecheckoutps .loading_big .loader .dot:nth-child(1),
        div#onepagecheckoutps .loading_big .loader .dot:nth-child(2),
        div#onepagecheckoutps .loading_big .loader .dot:nth-child(3),
        div#onepagecheckoutps .loading_big .loader .dot:nth-child(4),
        div#onepagecheckoutps .loading_big .loader .dot:nth-child(5){ldelim}
            background: {$paramsFront.CONFIGS.OPC_THEME_ICON_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_TEXT_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_TEXT_COLOR)}
        #onepagecheckoutps a,
        #onepagecheckoutps span,
        #onepagecheckoutps label,
        #onepagecheckoutps h5,
        #onepagecheckoutps h4,
        #onepagecheckoutps h3,
        #onepagecheckoutps h2,
        #onepagecheckoutps h1,
        #onepagecheckoutps div,
        #onepagecheckoutps p{ldelim}
            color: {$paramsFront.CONFIGS.OPC_THEME_TEXT_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_SELECTED_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_SELECTED_COLOR)}
        div#onepagecheckoutps .container_card.alert,
        div#onepagecheckoutps .module_payment_container.selected.alert.alert-info,
        div#onepagecheckoutps .delivery_option.selected.alert.alert-info {ldelim}
            background-color: {$paramsFront.CONFIGS.OPC_THEME_SELECTED_COLOR|escape:'htmlall':'UTF-8'} !important;
            border-color: {$paramsFront.CONFIGS.OPC_THEME_SELECTED_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_SELECTED_TEXT_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_SELECTED_TEXT_COLOR)}
        div#onepagecheckoutps .container_card.alert,
        #onepagecheckoutps .module_payment_container.selected.alert.alert-info,
        #onepagecheckoutps .delivery_option.selected.alert.alert-info {ldelim}
            color: {$paramsFront.CONFIGS.OPC_THEME_SELECTED_TEXT_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_CONFIRM_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_CONFIRM_COLOR)}
        div#opc_loading,
        #onepagecheckoutps #btn_place_order,
        #onepagecheckoutps #payment_modal #cart_navigation button,
        #onepagecheckoutps #btn_save_customer {ldelim}
            background: {$paramsFront.CONFIGS.OPC_THEME_CONFIRM_COLOR|escape:'htmlall':'UTF-8'} !important;
            border-color: {$paramsFront.CONFIGS.OPC_THEME_CONFIRM_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_CONFIRM_TEXT_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_CONFIRM_TEXT_COLOR)}
        div#opc_loading,
        #onepagecheckoutps #btn_place_order i.fa, #onepagecheckoutps #btn_place_order,
        #onepagecheckoutps #payment_modal #cart_navigation button i, #onepagecheckoutps #payment_modal #cart_navigation button,
        #onepagecheckoutps #btn_save_customer i.fa, #onepagecheckoutps #btn_save_customer {ldelim}
            border-color: {$paramsFront.CONFIGS.OPC_THEME_CONFIRM_TEXT_COLOR|escape:'htmlall':'UTF-8'} !important;
            color: {$paramsFront.CONFIGS.OPC_THEME_CONFIRM_TEXT_COLOR|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
        #onepagecheckoutps #btn_place_order:hover,
        #onepagecheckoutps #payment_modal #cart_navigation button:hover,
        #onepagecheckoutps #btn_save_customer:hover {ldelim}
            opacity: 0.8;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON) and not empty($paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON)}
        #onepagecheckoutps #opc_show_login{ldelim}
            background: {$paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON|escape:'htmlall':'UTF-8'} !important;
            border-color: {$paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON_TEXT) and not empty($paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON_TEXT)}
        #onepagecheckoutps #opc_show_login{ldelim}
            color: {$paramsFront.CONFIGS.OPC_ALREADY_REGISTER_BUTTON_TEXT|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON) and not empty($paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON)}
        #onepagecheckoutps #form_login #btn_login{ldelim}
            background: {$paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON|escape:'htmlall':'UTF-8'} !important;
            border-color: {$paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON_TEXT) and not empty($paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON_TEXT)}
        #onepagecheckoutps #form_login #btn_login{ldelim}
            color: {$paramsFront.CONFIGS.OPC_THEME_LOGIN_BUTTON_TEXT|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON) and not empty($paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON)}
        #onepagecheckoutps #list-voucher-allowed #submitAddDiscount{ldelim}
            background: {$paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON|escape:'htmlall':'UTF-8'} !important;
            border-color: {$paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON_TEXT) and not empty($paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON_TEXT)}
        #onepagecheckoutps #list-voucher-allowed #submitAddDiscount{ldelim}
            color: {$paramsFront.CONFIGS.OPC_THEME_VOUCHER_BUTTON_TEXT|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_BACKGROUND_BUTTON_FOOTER) and not empty($paramsFront.CONFIGS.OPC_BACKGROUND_BUTTON_FOOTER)}
        div#onepagecheckoutps div#onepagecheckoutps_step_review .stick_buttons_footer{ldelim}
            background-color: {$paramsFront.CONFIGS.OPC_BACKGROUND_BUTTON_FOOTER|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}
    {if isset($paramsFront.CONFIGS.OPC_THEME_BORDER_BUTTON_FOOTER) and not empty($paramsFront.CONFIGS.OPC_THEME_BORDER_BUTTON_FOOTER)}
        div#onepagecheckoutps div#onepagecheckoutps_step_review .stick_buttons_footer{ldelim}
            border-color: {$paramsFront.CONFIGS.OPC_THEME_BORDER_BUTTON_FOOTER|escape:'htmlall':'UTF-8'} !important;
        {rdelim}
    {/if}

    @media (max-width: 992px) {ldelim}
        #order-detail-content .cart_item {ldelim}
            {if isset($paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR) and not empty($paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR)}
                border-bottom: 1px solid {$paramsFront.CONFIGS.OPC_THEME_BORDER_COLOR|escape:'htmlall':'UTF-8'};
            {else}
                border-bottom: 1px solid #d6d4d4;
            {/if}
        {rdelim}
    {rdelim}
    {* support module: productcomposer - v1.8.4 - TuniSoft *}
    {if isset($paramsFront.pc_special) and not empty($paramsFront.pc_special)}
        div#onepagecheckoutps div#onepagecheckoutps_step_review #order-detail-content div[id^="product_{$paramsFront.pc_special|intval}_"]{ldelim}
            display: none !important;
        {rdelim}
    {/if}
</style>