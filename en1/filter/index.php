<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<div class="wrap" style="padding-top:150px;">
  <h2 class="mb-3">Подбор по собственным параметрам</h2>


<div class="filter fil1" >
  <span>Звание</span>
  <input id="zvanie1" name="zvanie" type="radio" value="1"><label for="zvanie1">Высшее командование</label>
  <input id="zvanie2" name="zvanie" type="radio" value="2"><label for="zvanie2">Старший офицерский состав</label>
  <input id="zvanie3" name="zvanie" type="radio" value="3"><label for="zvanie3">Младший офицерский состав</label>
  <input id="zvanie4" name="zvanie" type="radio" value="4"><label for="zvanie4">Рядовой</label>
</div>

<div class="filter fil2" >
  <span>Пол</span>
  <input id="pol1" name="pol" type="radio" value="Мужская"><label for="pol1">Мужчина</label>
  <input id="pol2" name="pol" type="radio" value="Женская"><label for="pol2">Женщина</label>
</div>

<div class="filter fil3" >
  <span>Ведомство</span>
  <input id="vedomstvo1" name="vedomstvo" type="radio" value="МО РФ"><label for="vedomstvo1">МО РФ</label>
  <input id="vedomstvo2" name="vedomstvo" type="radio" value="МВД РФ"><label for="vedomstvo2">МВД РФ</label>
  <input id="vedomstvo3" name="vedomstvo" type="radio" value="ФСБ РФ"><label for="vedomstvo3">ФСБ РФ</label>
  <input id="vedomstvo4" name="vedomstvo" type="radio" value="ВМФ РФ"><label for="vedomstvo4">ВМФ РФ</label>
  <input id="vedomstvo5" name="vedomstvo" type="radio" value="КВ ВКС РФ"><label for="vedomstvo5">КВ ВКС РФ</label>
  <input id="vedomstvo6" name="vedomstvo" type="radio" value="РОСГВАРДИЯ РФ"><label for="vedomstvo6">РОСГВАРДИЯ РФ</label>
  <input id="vedomstvo7" name="vedomstvo" type="radio" value="ПРОКУРАТУРА РФ"><label for="vedomstvo7">ПРОКУРАТУРА РФ</label>
  <input id="vedomstvo8" name="vedomstvo" type="radio" value="ФСИН РФ"><label for="vedomstvo8">ФСИН РФ</label>
  <input id="vedomstvo9" name="vedomstvo" type="radio" value="МЧС РФ"><label for="vedomstvo9">МЧС РФ</label>
  <input id="vedomstvo10" name="vedomstvo" type="radio" value="ВДВ РФ"><label for="vedomstvo10">ВДВ РФ</label>
  <input id="vedomstvo11" name="vedomstvo" type="radio" value="ФСО РФ"><label for="vedomstvo11">ФСО РФ</label>
  <input id="vedomstvo12" name="vedomstvo" type="radio" value="СК РФ"><label for="vedomstvo12">СК РФ</label>
</div>

<div class="filter fil4" >
  <span>Сезон</span>
  <input id="sezon1" name="sezon" type="radio" value="Зима"><label for="sezon1">Зима</label>
  <input id="sezon2" name="sezon" type="radio" value="Весна/Осень"><label for="sezon2">Весна/Осень</label>
  <input id="sezon3" name="sezon" type="radio" value="Лето"><label for="sezon3">Лето</label>
  <input id="sezon4" name="sezon" type="radio" value="Демисезонные"><label for="sezon4">Демисезонные</label>
</div>

<div class="filter fil5" >
  <span>Назначение</span>
  <input id="naznac1" name="naznac" type="radio" value="Парадная"><label for="naznac1">Парадная</label>
  <input id="naznac2" name="naznac" type="radio" value="Повседневная"><label for="naznac2">Повседневная</label>
  <input id="naznac3" name="naznac" type="radio" value="Полевая"><label for="naznac3">Полевая</label>
</div>

<div class="filter fil6" >
  <span>Размер</span>

  <select name="size" id="size">
    <option value="">---</option>
    <option value="46">46</option>
    <option value="48">48</option>
    <option value="50">50</option>
    <option value="52">52</option>
    <option value="54">54</option>
    <option value="56">56</option>
    <option value="58">58</option>
    <option value="60">60</option>
    <option value="62">62</option>
  </select>
</div>

<div class="filter fil7" >
  <span>ТУ</span>
  <input id="ty" name="ty" type="text" class="txt" placeholder="№">
</div>

<div class="filter fil8" >
  <span>Цена</span>
  <input id="price1" name="price1" type="text" class="txt2" placeholder="от">
  <input id="price2" name="price2" type="text" class="txt2" placeholder="до">
</div>



<div id="fillter">
  Подобрать
</div>


<div id="fills">

    <!-- begin catalog -->

      <div class="catalog">


  <?$APPLICATION->IncludeComponent(
  "bitrix:catalog.section",
  "main",
  array(
  "PRODUCT_DISPLAY_MODE" => "N",
  "ADD_PICT_PROP" => "-",
  "LABEL_PROP" => array(
  ),
  "OFFER_ADD_PICT_PROP" => "-",
  "OFFER_TREE_PROPS" => array(
  0 => "-",
  ),
  "PRODUCT_SUBSCRIPTION" => "N",
  "SHOW_DISCOUNT_PERCENT" => "N",
  "SHOW_OLD_PRICE" => "Y",
  "MESS_BTN_BUY" => "Купить",
  "MESS_BTN_ADD_TO_BASKET" => "В корзину",
  "MESS_BTN_SUBSCRIBE" => "Подписаться",
  "MESS_BTN_DETAIL" => "Подробнее",
  "MESS_NOT_AVAILABLE" => "Нет в наличии",
  "AJAX_MODE" => "N",
  "IBLOCK_TYPE" => "catalog",
  "IBLOCK_ID" => "2",
  "SECTION_ID" => "",
  "SECTION_CODE" => "",
  "SECTION_USER_FIELDS" => array(
  0 => "",
  1 => "",
  ),
  "ELEMENT_SORT_FIELD" => "sort",
  "ELEMENT_SORT_ORDER" => "asc",
  "ELEMENT_SORT_FIELD2" => "id",
  "ELEMENT_SORT_ORDER2" => "desc",
  "FILTER_NAME" => "arrFilter",
  "INCLUDE_SUBSECTIONS" => "A",
  "SHOW_ALL_WO_SECTION" => "Y",
  "SECTION_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/",
  "DETAIL_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
  "BASKET_URL" => "/personal/basket.php",
  "ACTION_VARIABLE" => "action",
  "PRODUCT_ID_VARIABLE" => "id",
  "PRODUCT_QUANTITY_VARIABLE" => "quantity",
  "PRODUCT_PROPS_VARIABLE" => "prop",
  "SECTION_ID_VARIABLE" => "SECTION_CODE",
  "META_KEYWORDS" => "-",
  "META_DESCRIPTION" => "-",
  "BROWSER_TITLE" => "-",
  "ADD_SECTIONS_CHAIN" => "N",
  "DISPLAY_COMPARE" => "N",
  "SET_TITLE" => "Y",
  "SET_STATUS_404" => "N",
  "PAGE_ELEMENT_COUNT" => "40",
  "LINE_ELEMENT_COUNT" => "4",
  "PROPERTY_CODE" => "",
  "OFFERS_FIELD_CODE" => "",
  "OFFERS_PROPERTY_CODE" => "",
  "OFFERS_SORT_FIELD" => "sort",
  "OFFERS_SORT_ORDER" => "asc",
  "OFFERS_SORT_FIELD2" => "id",
  "OFFERS_SORT_ORDER2" => "desc",
  "OFFERS_LIMIT" => "6",
  "PRICE_CODE" => array(
  0 => "BASE",
  1 => "old",
  ),
  "USE_PRICE_COUNT" => "N",
  "SHOW_PRICE_COUNT" => "1",
  "PRICE_VAT_INCLUDE" => "N",
  "PRODUCT_PROPERTIES" => "",
  "USE_PRODUCT_QUANTITY" => "N",
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "36000000",
  "CACHE_FILTER" => "N",
  "CACHE_GROUPS" => "Y",
  "PAGER_TEMPLATE" => ".default",
  "DISPLAY_TOP_PAGER" => "N",
  "DISPLAY_BOTTOM_PAGER" => "N",
  "PAGER_TITLE" => "Товары",
  "PAGER_SHOW_ALWAYS" => "N",
  "PAGER_DESC_NUMBERING" => "N",
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
  "PAGER_SHOW_ALL" => "N",
  "HIDE_NOT_AVAILABLE" => "N",
  "CONVERT_CURRENCY" => "N",
  "OFFERS_CART_PROPERTIES" => "",
  "AJAX_OPTION_JUMP" => "N",
  "AJAX_OPTION_STYLE" => "Y",
  "AJAX_OPTION_HISTORY" => "N",
  "COMPONENT_TEMPLATE" => "main",
  "CUSTOM_FILTER" => "",
  "HIDE_NOT_AVAILABLE_OFFERS" => "N",
  "BACKGROUND_IMAGE" => "-",
  "TEMPLATE_THEME" => "blue",
  "PRODUCT_ROW_VARIANTS" => "",
  "ENLARGE_PRODUCT" => "STRICT",
  "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
  "SHOW_SLIDER" => "Y",
  "SLIDER_INTERVAL" => "3000",
  "SLIDER_PROGRESS" => "N",
  "SHOW_MAX_QUANTITY" => "N",
  "SHOW_CLOSE_POPUP" => "N",
  "RCM_TYPE" => "personal",
  "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
  "SHOW_FROM_SECTION" => "N",
  "SEF_MODE" => "Y",
  "AJAX_OPTION_ADDITIONAL" => "",
  "SET_BROWSER_TITLE" => "Y",
  "SET_META_KEYWORDS" => "Y",
  "SET_META_DESCRIPTION" => "Y",
  "SET_LAST_MODIFIED" => "N",
  "USE_MAIN_ELEMENT_SECTION" => "N",
  "ADD_PROPERTIES_TO_BASKET" => "Y",
  "PARTIAL_PRODUCT_PROPERTIES" => "N",
  "ADD_TO_BASKET_ACTION" => "ADD",
  "USE_ENHANCED_ECOMMERCE" => "N",
  "PAGER_BASE_LINK_ENABLE" => "N",
  "LAZY_LOAD" => "N",
  "LOAD_ON_SCROLL" => "N",
  "SHOW_404" => "N",
  "MESSAGE_404" => "",
  "COMPATIBLE_MODE" => "Y",
  "DISABLE_INIT_JS_IN_COMPONENT" => "N",
  "CURRENCY_ID" => "RUB",
  "SEF_RULE" => "",
  "SECTION_CODE_PATH" => "",
  "PROPERTY_CODE_MOBILE" => array(
  )
  ),
  false
  );?>

  </div>
    <!-- end catalog -->


</div>


</div>


<script>

function rest() {
			$("#fills")
			.empty()

      var p1 = $('.fil1 input:checked').val();
      var p2 = $('.fil2 input:checked').val();
      var p3 = $('.fil3 input:checked').val();
      var p4 = $('.fil4 input:checked').val();
      var p5 = $('.fil5 input:checked').val();
      var p6 = $('.fil6 select').val();
      var p7 = $('.fil7 input').val();
      var p8 = $('#price1').val();
      var p8_1 = $('#price2').val();

		$.post(
		"/filter/main.php",
		{
				pp1 : p1,
        pp2 : p2,
        pp3 : p3,
        pp4 : p4,
        pp5 : p5,
        pp6 : p6,
        pp7 : p7,
        pp8 : p8,
        pp8_1 : p8_1,


		},
		function(data) {
				$("#fills").html(data);
		}
		);
}

	$(document).on('click', '#fillter', rest);
</script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
