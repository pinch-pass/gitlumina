/**
* 2005-2017 Magic Toolbox
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement.
*
* You must not modify, adapt or create derivative works of this source code
*
*  @author    Magic Toolbox <support@magictoolbox.com>
*  @copyright Copyright (c) 2017 Magic Toolbox <support@magictoolbox.com>. All rights reserved
*  @license   https://www.magictoolbox.com/license/
*/


    var templateOptions = [];
    var magicscrollOptions = [];

    //initOptionsValidation('template', 'magicscroll');

    function initOptionsValidation(templateOptionName, magicscrollOptionName, templateOptionValuesPrefix, magicscrollOptionValuesPrefix) {

        if (templateOptionValuesPrefix === undefined) {
            templateOptionValuesPrefix = '';
        }
        if (magicscrollOptionValuesPrefix === undefined) {
            magicscrollOptionValuesPrefix = '';
        }

        if (!templateOptions.length) {
            templateOptions = document.getElementsByName(templateOptionName);
        }
        if (!magicscrollOptions.length) {
            magicscrollOptions = document.getElementsByName(magicscrollOptionName);
        }
        if (templateOptions.length && magicscrollOptions.length) {
            bindOptions(magicscrollOptions, magicscrollOptionValuesPrefix+'Yes', templateOptions, templateOptionValuesPrefix+'original', templateOptionValuesPrefix+'bottom');
            bindOptions(templateOptions, templateOptionValuesPrefix+'original', magicscrollOptions, magicscrollOptionValuesPrefix+'Yes', magicscrollOptionValuesPrefix+'No');
        }
    }

    function bindOptions(optionsToBind, onValue, optionsToSet, checkValue, setValue) {
        if (optionsToBind[0].type == 'radio') {
            for (var i = 0, l = optionsToBind.length; i < l; i++) {
                optionsToBind[i].onclick = function() {
                    if (this.checked && this.value == onValue) {
                        setOptionValue(optionsToSet, checkValue, setValue);
                    }
                }
            }
        } else if (optionsToBind[0].type == 'select-one') {
            optionsToBind[0].onchange = function() {
                if (this.value == onValue) {
                    setOptionValue(optionsToSet, checkValue, setValue);
                }
            }
        }
    }

    function setOptionValue(options, checkValue, setValue) {
        if (options[0].type == 'select-one') {
            if (options[0].value == checkValue) {
                for (var i = 0, l = options[0].options.length; i < l; i++) {
                    if (options[0].options[i].value == setValue) {
                        options[0].value = options[0].options[i].value;
                        options[0].selectedIndex = i;
                        return;
                    }
                }
            }
        } else if (options[0].type == 'radio') {
            var setOption = false;
            for (var i = 0, l = options.length; i < l; i++) {
                if (options[i].checked && options[i].value == checkValue) {
                    options[i].checked = false;
                    setOption = true;
                } else if (setOption && options[i].value == setValue) {/*checkValue value must be first in node list*/
                    options[i].checked = true;
                    return;
                }
            }
        }
    }


