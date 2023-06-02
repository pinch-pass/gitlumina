{*
*   Stworzeone przez SEIGI.eu
*
*
*
*
*
*}

{*jpg*}

{*<img class="img-responsive lazy"*}
     {*src="{$img_url}"*}
     {*alt="{$img_alt|escape:'htmlall':'UTF-8'}" {$img_attributes} />*}

{*webp*}

<img class="img-responsive lazy"
     src="{$img_url|replace:'.jpg':'.webp'|replace:'home_default':'large_default'}"
     alt="{$img_alt|escape:'htmlall':'UTF-8'}" {$img_attributes} />

{*all*}

{*<picture>*}
    {*<source type="image/webp" data-srcset="{$img_url|replace:'.jpg':'.webp'|replace:'home_default':'large_default'}">*}
    {*<img class="img-responsive lazy"*}
         {*data-src="{$img_url}"*}
         {*alt="{$img_alt|escape:'htmlall':'UTF-8'}" {$img_attributes} />*}
{*</picture>*}