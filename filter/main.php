<?
require_once("../bitrix/modules/main/bx_root.php");

require_once($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/include/prolog_before.php");
//require($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/include/prolog_after.php");
$p1 = htmlspecialchars(trim($_POST['pp1']));
$p2 = htmlspecialchars(trim($_POST['pp2']));
$p3 = htmlspecialchars(trim($_POST['pp3']));
$p4 = htmlspecialchars(trim($_POST['pp4']));
$p5 = htmlspecialchars(trim($_POST['pp5']));

if($p1 == 1) {
  $p1 = array(
    0 => "генерал-лейтенан",
    1 => "генерал-майор",
    2 => "генерал армии",
    3 => "генерал-полковник",
  );

} elseif ($p1 == 2) {
  $p1 = array(
    0 => "майор",
    1 => "подполковник",
    2 => "майор",
  );
} elseif ($p1 == 3) {
  $p1 = array(
    0 => "капитан",
    1 => "старший лейтенант",
    2 => "лейтенант",
    3 => "младший лейтенант",
  );
} elseif ($p1 == 4) {
  $p1 = array(
    0 => "рядовой",
    1 => "ефрейтор",
    2 => "младший сержант",
    3 => "сержант",
    4 => "старший сержант",
    5 => "старшина",
    6 => "прапорщик",
    7 => "старший прапорщик",
  );
}


$p6 = htmlspecialchars(trim($_POST['pp6']));
$p8 = htmlspecialchars(trim($_POST['pp8']));
$p8_1 = htmlspecialchars(trim($_POST['pp8_1']));


?>
  <!-- begin catalog -->

    <div class="catalog">

      <?
          global $arrFilter;
          $arrFilter = array('PROPERTY_zvan_VALUE'=>$p1,'PROPERTY_gender_VALUE'=>$p2,'PROPERTY_vedomstvo_VALUE'=>$p3,'PROPERTY_sezon_VALUE'=>$p4,'PROPERTY_znach_VALUE'=>$p5,'PROPERTY_ty_VALUE'=>$p7);

          $arrFilter['OFFERS']['PROPERTY_size_VALUE'] = $p6;
          $arrFilter[">=CATALOG_PRICE_1"]=$p8;
          $arrFilter["<=CATALOG_PRICE_1"]=$p8_1;
  ?>



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
