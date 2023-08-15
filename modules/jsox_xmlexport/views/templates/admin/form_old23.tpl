<h2>Настройка профиля XML</h2>
<form id="jsoxConfigXmlForm">
    <p>
        <label for="chooseConfigName">
    <h2>Выберите пресет XML или создайте новый</h2></label>
    <select id="chooseConfigName" name="chooseConfigName">
    </select>
    </p>
    <label for="сonfig_name">Название пресета (только латиница, цифры, "-", "_")</label>
    <input type="text" name="сonfig_name" id="сonfig_name">
    <br>


    <div class="row">
        <div class="col-md-6">
            <h4>Выберите категории которые попадут в выгрузку:</h4>
            {{$categoriesOptions}}
        </div>
        <div class="col-md-6">
            <h4>Выберите производителей которые попадут в выгрузку:</h4>
            {{$manufactorersOptions}}
        </div>
        <div class="col-md-6">
            <h4>Выберите диапазон цен:</h4>
            <div class="row">
                <div class="col-md-6">
                    <label for="priceFrom">Цена от</h3>
                        <input type="number" id="priceFrom" name="priceFrom">
                </div>
                <div class="col-md-6">
                    <label for="priceTo">Цена до</h3>
                        <input type="number" id="priceTo" name="priceTo">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Все фото? (иначе только обложка)</h4>
            <input type="checkbox" name="allPhotos" checked="checked">
        </div>
        <div class="col-md-6">
            <h4>Включить описание товара в выгрузку?</h4>
            <input type="checkbox" name="includeDescription" checked="checked">
        </div>
        <div class="col-md-6" style="margin-top: 50px;">
            <input type="checkbox" name="check" value="allproducts" onclick="onlyOne(this)">
            <label> Выгружать все товары</label><br>
            <input type="checkbox" name="check" value="onproducts" onclick="onlyOne(this)">
            <label> Выгружать только активные товары</label><br>
            <input type="checkbox" name="check" value="offproducts" onclick="onlyOne(this)">
            <label> Выгружать только неактивные товары</label><br>
            <input type="checkbox" name="check" value="off" onclick="onlyOne(this)">
            <label> Отключить все</label><br>
        </div>
    </div>
    <hr>

</form>
<script>
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('check')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        });
    }
</script>
