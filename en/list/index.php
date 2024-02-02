<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<div class="list_title">
  <div>Обмерочный лист</div>
</div>


<style>

.list_title {
  border-bottom: 1px solid #eee;
    padding-bottom: 20px;
    margin-bottom: 40px;
}

.list_title div {
  max-width: 1100px;
    margin: 0 auto;
}
</style>

<div class="wrap">
  <div class="wrap_list">


    <div class="list_l_title">ДЛЯ ВЕРХНЕЙ ФОРМЕННОЙ ОДЕЖДЫ</div>
      <form action="#" method="post">
          <div class="lists">


              <div class="list_l">
                  <a id="genda" data-fancybox="gallery" href="/list/man-big.gif"><img src="/list/man-big.gif" id="gend" alt=""></a>
              </div>

              <div class="list_r">


                    <div class="lister">
                      <p><input type="radio" class="radio" checked name="gender" id="gender1" value="Мужчина"><label for="gender1">Мужчина</label></p>
                      <p><input type="radio" class="radio" name="gender" id="gender2" value="Женщина"><label for="gender2">Женщина</label></p>
                    </div>

                    <div class="lister">
                      <p><label for="">Дата заполнение</label> <input type="text" value='<?php echo date("d-m-Y"); ?>'></p>
                      <p><label for="">Ф.И.О</label> <input type="text"></p>
                      <p><label for="">Воинское звание</label> <input type="text"></p>
                      <p><label for="">Подразделение</label> <input type="text"></p>
                      <p><label for="">Телефон</label> <input type="text"></p>
                      <p><label for="">Email</label> <input type="text"></p>
                    </div>


                    <div class="lister">
                      <h2 id="znaki">ПОГОНЫ, ШЕВРОНЫ</h2>
                      <p><label for="">Правый</label> <input type="text"></p>
                      <p><label for="">Левый</label> <input type="text"></p>
                    </div>


                    <div class="lister">
                      <h2>Товары в вашей корзине</h2>

                      <div class="list_cart">



                      <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "list", Array(
                      	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
                      		"COLUMNS_LIST" => array(
                      			0 => "NAME",
                      			1 => "DISCOUNT",
                      			2 => "PRICE",
                      			3 => "QUANTITY",
                      			4 => "SUM",
                      			5 => "PROPS",
                      			6 => "DELETE",
                      			7 => "DELAY",
                      		),
                      		"AJAX_MODE" => "N",
                      		"AJAX_OPTION_JUMP" => "N",
                      		"AJAX_OPTION_STYLE" => "Y",
                      		"AJAX_OPTION_HISTORY" => "N",
                      		"PATH_TO_ORDER" => "/personal/order/make/",	// Страница оформления заказа
                      		"HIDE_COUPON" => "N",	// Спрятать поле ввода купона
                      		"QUANTITY_FLOAT" => "N",	// Использовать дробное значение количества
                      		"PRICE_VAT_SHOW_VALUE" => "Y",	// Отображать значение НДС
                      		"TEMPLATE_THEME" => "site",	// Цветовая тема
                      		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                      		"AJAX_OPTION_ADDITIONAL" => "",
                      		"OFFERS_PROPS" => array(
                      			0 => "SIZES_SHOES",
                      			1 => "SIZES_CLOTHES",
                            2 => "COLOR_REF",
                            3 => "personal",
                      		)
                      	),
                      	false
                      );?>


                      </div>

                      <div class="for">Для смены или добавления товара добавьте требуемое в корзину из Каталога продукции</div>

                    </div>

                    <div class="lister">
                      <h2 style="font-size: 26px;color: #2b392c;">ИНДИВИДУАЛЬНЫЕ МЕРКИ</h2>
                      <p>При проведении обмеров, обмеряемый должен находиться в надетой рубашке (ни в коем случае не измерять поверх верхней одежды!!!). При этом нужно зафиксировать линию талии (либо резинкой, либо мягким поясом), т.к. она участвует в нескольких измерениях и ее смещение нежелательно. Измерения вносить в бланк без прибавки на свободу!</p>

                    <div class="lister tabbed2">
                      <p><label for=""><span style="color:#fff;">1 <span>Огол</span></span></label> <input type="text"></p>
                      <p><label for=""><span style="color:#fff;">2 <span>Ро</span></span></label> <input type="text"></p>
                    </div>


                    </div>


              </div>

          </div>


          <div class="lists">
            <div class="list_l">

            </div>

            <div class="list_r">



              <div class="lister tabbed2 active">
                <div class="ortop">
                  <div class="ros">
                    <div class="sb">Китель</div>
                    <div class="rasz">Размеры в см</div>
                  </div>

                  <div class="ros">
                    <div class="sb">Рубашка</div>
                    <div class="rasz">Размеры в см</div>
                  </div>

                </div>


                <div id="man"  class="active">

                  <p><label for=""><span>1 <span>Р</span></span></label> <input type="text"></p>
                  <p><label for=""><span>2 <span title="Расшифровка">Сш</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>3 <span>Сг</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>4 <span>Ст</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>5 <span>Сб</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p class="man"><label for=""><span>6 <span>Шг</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>7 <span>Шс</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>8 <span>Шп</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>9 <span>Др</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>10 <span>Щп</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>11 <span>Дтп</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>12 <span>Дтс</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>13 <span>Озап</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>14 <span>Ди</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>

                  <div class="ortop" style="margin-top: 50px;">
                    <div class="ros">
                      <div class="sb" id="bruki">Брюки</div>
                      <div class="rasz">Размеры в см</div>
                    </div>
                  </div>


                    <p><label for=""><span>4 <span>Ст</span></span></label> <input type="text"></p>
                    <p><label for=""><span>5 <span>Сб</span></span></label> <input type="text"></p>
                    <p><label for=""><span>15 <span>Обед</span></span></label> <input type="text"></p>
                    <p><label for=""><span>16 <span>Дб</span></span></label> <input type="text"></p>
                    <p><label for=""><span>17 <span>Шниз</span></span></label> <input type="text"></p>

                </div>


                <div id="woman">

                  <p><label for=""><span>1 <span>Р</span></span></label> <input type="text"></p>
                  <p><label for=""><span>2 <span title="Расшифровка">Сш</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>3 <span>Сг</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>4 <span>Ст</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>5 <span>Сб</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>6 <span>Шг1</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>7 <span>Шг2</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>8 <span>Шс</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>9 <span>Шп</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>10 <span>Др</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>11 <span>Оп</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>12 <span>Дтс</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>13 <span>Дтп2</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>14 <span>Вг2</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>15 <span>Цг</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>16 <span>Озап</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>
                  <p><label for=""><span>17 <span>Ди</span></span></label> <input type="text" class="mini"><input type="text" class="mini"></p>


                  <div class="ortop" style="margin-top: 50px;">
                    <div class="ros">
                      <div class="sb" id="">Юбка</div>
                      <div class="rasz">Размеры в см</div>
                    </div>
                  </div>


                    <p><label for=""><span>4 <span>Ст</span></span></label> <input type="text"></p>
                    <p><label for=""><span>8 <span>Сб</span></span></label> <input type="text"></p>
                    <p><label for=""><span>18 <span>Дю</span></span></label> <input type="text"></p>
                    <p><label for=""><span>19 <span>Дб</span></span></label> <input type="text"></p>
                    <p><label for=""><span>20 <span>Шниз</span></span></label> <input type="text"></p>

                </div>




              </div>

              <div class="indiv">
                <h2>ИНДИВИДУАЛЬНЫЕ ОСОБЕННОСТИ ФИГУРЫ И ДОП. ИНФОРМАЦИЯ</h2>
                <textarea name="indi" id="indi"></textarea>
              </div>

              <div class="lister">
                <h2>Способ оплаты</h2>

                <select name="" id="">
                  <option value="Кредитная или дебетовая карта">Кредитная или дебетовая карта</option>
                  <option value="Кредитная или дебетовая карта">Наличными</option>
                </select>
              </div>


              <a href="/list/zr-ol-man.doc" class="pdf">Скачать ОЛ для мужчины</a>

              <a href="/list/zr-ol-woman.doc" class="pdf">Скачать ОЛ для женщины</a>

            </div>
          </div>



      </form>
  </div>

</div>

  <div class="lils">
    <div class="wrap_list">
        <div class="lil">
            <p>В нашем обмерочном листе представлена схема обмеров, которая поможет Вам не допустить ошибок.</p>
            <p>Перед оформлением заказа и оплаты рекомендуем проверить данные Обмерочного листа, связавшись со специалистами фабрики по телефону: 8 (495) 744-79-12.</p>
            <p>Мерки на индивидуальный пошив кожаного плаща снимаются только в офисе фабрики. Мерки на плащ, снятые самостоятельно, к производству не принимаются.</p>
        </div>

        <div class="lil">
          <p>Будьте особо внимательны при снятии примерочных данных, т.к. в случае пошива изделий с ошибочно предоставленными данными со стороны заказчика, фабрика ответственности не несёт. Фабрика может гарантировать результат правильных замеров только при обращении покупателя непосредственно в офис фабрики.</p>
        </div>
    </div>
  </div>


    <button type="button" id="send" name="button">Заказать</button>

<style>
 #woman {
   display:none;
 }

 #man {
   display:none;
 }

 .active {
   display:block!important;
 }
</style>


<script>
  $('.radio').change(function(){
    if($('#gender2').is(':checked')) {
      $('#gend').attr('src', '/list/woman-big.gif');
      $('#genda').attr('href', '/list/woman-big.gif');
      $('#woman').addClass('active');
      $('#man').removeClass('active');
    } else {
      $('#gend').attr('src', '/list/man-big.gif');
      $('#genda').attr('href', '/list/man-big.gif');
      $('#man').addClass('active');
      $('#wonam').removeClass('active');
    }
  })
</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
