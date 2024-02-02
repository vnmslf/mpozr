<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Regimental Uniform and Headgear");
$APPLICATION->SetPageProperty("title", "OOO Zolotoe Runo manufacturer of uniforms and hats made of leather and fur for the power structures of the Russian Federation.");
$APPLICATION->SetPageProperty("description", "Uniforms and hats of security forces in leather and fur accessories. Manufacturer's prices. Dress by the rules.");
$APPLICATION->SetTitle("OOO Zolotoe Runo");
?>

<!-- 

<div class="sliders">
            <div><img src="<?=SITE_TEMPLATE_PATH?>/img/slide1.png" alt=""></div>
              <div><img src="<?=SITE_TEMPLATE_PATH?>/img/slide2.png" alt=""></div>
            <div><img src="<?=SITE_TEMPLATE_PATH?>/img/slide3.png" alt=""></div>
            <div><img src="<?=SITE_TEMPLATE_PATH?>/img/slide4.png" alt=""></div>

</div> -->

<?
	
	$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"slider", 
	array(
		"COMPONENT_TEMPLATE" => "slider",
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "9",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "slide",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "slide",
			2 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);
?> 




              <div class="wrap">
                <div class="blocks">
                  <div class="block1">
					<a href="/en/catalog/golovnye-ubory/zimnie">
					<div class="inz">
						<p>Uniform Hats</p>
						<span>Winter Hats</span>
					</div>
					<img src="/local/templates/main/img/glavnaya-shapka.jpg" alt="">
				</a>
                  </div>

                  <div class="block2">
                    <div class="block3">
					  <a href="/en/catalog/odejda/formennye-kozh-kurtki-i-plashchi-iz-nat-kozhi">
					  <div class="inz">
						<p>Uniforms</p>
						<span>Jackets and Raincoats</span>
					</div>
					  <img src="/local/templates/main/img/glavnaya-kozhannaya.jpg" alt=""></a>
                    </div>

                    <div class="block4">
					  <a href="/en/catalog/odejda/formennye-pidzhaki-i-zhakety">
					  <div class="inz">
						<p>Textile</p>
						<span>Uniforms</span>
					</div>
					  <img src="/local/templates/main/img/glavnaya-formennaya.jpg" alt=""></a>
					  <a href="/en/catalog/aksessuary/pogony-i-shevrony">
					  <div class="inz">
						<p>Accessories</p>
						<span>Distinguishing Insignia</span>
						</div>
					  <img src="/local/templates/main/img/block4.png" alt=""></a>
                    </div>


                  </div>
                </div>

              </div>

      <div class="wrap">
                <div class="preims">

                  <div class="preim">
                    <div class="ptitle">
                      ALWAYS AVAILABLE
                    </div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/home/vsegda-v-nalichii.svg" alt="">
                    <div class="pbig">
                      FINISHED GOODS ГОТОВЫЕ IN THE WAREHOUSE IN MOSCOW
                    </div>
                    <span>WE WILL MAKE THE GOODS FOR YOU EVEN IFTHERE IS NO AVAILABLE GOODS IN YOUR SIZE IN THE STORE PRESENTLY</span>
                  </div>

                  <div class="preim">
                    <div class="ptitle">
                      INDIVIDUAL SEWING
                    </div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/home/indiv_poshiv.svg" alt="">
                    <div class="pbig">
                      SEWING OF REGIMENTAL UNIFORM AND HEADGEAR ACCORDING TO YOUR MEASUREMENTS
                    </div>
                    <span>FILL IN THE MEASUREMENT SHEET
<a href="/en/list/">ON OUR SITE</a> AND WAIT FOR THE MANAGER'S ANSWER ABOUT THE TIME AND COST</span>
                  </div>

                  <div class="preim">
                    <div class="ptitle">
                      WHOLESALE SUPPLY
                    </div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/home/optovym-pokupateliam.svg" alt="">
                    <div class="pbig">
                      FAVORABLE CONDITIONS FOR WHOLESALE BUYERS
                    </div>
                    <span>THE FACTORY INVITES WHOLESALE BUYERS AND OFFERS INDIVIDUAL TERMS OF COOPERATION</span>
                  </div>
                </div>
</div>

    <!-- begin fillter -->

    <div class="fillter">
      <div class="zg">QUICK SEARCH</div>
      <div class="zag">REGIMENTAL UNIFORM and HEADGEAR</div>
        <div class="wrap">
            <div class="fills_1">
              <a href="/en/vysshego-komandnogo-sostava/" class="fill_1">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f1.png" alt="">
                <span>SENIOR COMMAND UNIFOR</span>
              </a>

              <a href="/en/ofitserskogo-sostava/"   class="fill_1">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f2.png" alt="">
                <span>OFFICER UNIFORM</span>
              </a>

              <a href="/en/ryadovogo-sostava/" class="fill_1">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f3.png" alt="">
                <span>PRIVATE SOLDIER UNIFORM</span>
              </a>
            </div>

            <div class="fills_2">

              <a href="/en/men/" class="fill_2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f4.png" alt="">
                <span>MEN</span>
              </a>
              <a href="/en/women/" class="fill_2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f5.png" alt="">
                <span>WOMEN</span>
              </a>


            </div>



            <div class="fills_3">

              <a href="/en/winter-parade/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f6.png" alt="">
                <span>WINTER DRESS UNIFOR</span>
              </a>
              <a href="/en/summer-parade/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f7.png" alt="">
                <span>SUMMER DRESS UNIFORM</span>
              </a>
              <a href="/en/winter-casual/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f8.png" alt="">
                <span>WINTER CASUAL UNIFORM</span>
              </a>
              <a href="/en/shtab/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f9.png" alt="">
                <span>STAFF UNIFOR</span>
              </a>
              <a href="/en/winter-field/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f10.png" alt="">
                <span>WINTER FIELD UNIFOR</span>
              </a>
              <a href="/en/summer-field/" class="fill_3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/f11.png" alt="">
                <span>SUMMER FIELD UNIFORM</span>
              </a>

			  
            </div>

            <a href="/en/filter" class="fills_4">SELECT<br/> ACCORDING<br/> TO INDIVIDUAL PARAMETERS</a>


        </div>
    </div>


    <!-- end fillter -->





                <!-- begin catalog -->
              <div class="wrap">
                                <div class="catalog">
                                  <div class="titled">
								  	HEADGEAR
                                  </div>




<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main_eng", 
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
		"MESS_BTN_BUY" => "Buy",
		"MESS_BTN_ADD_TO_BASKET" => "Go to Shopping Bag",
		"MESS_BTN_SUBSCRIBE" => "Subscribe",
		"MESS_BTN_DETAIL" => "More",
		"MESS_NOT_AVAILABLE" => "Not in Stock",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "7",
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
		"SECTION_URL" => "#SITE_DIR#/en/catalog/#SECTION_CODE#/",
		"DETAIL_URL" => "#SITE_DIR#/en/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
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
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => "",
		"USE_PRODUCT_QUANTITY" => "Y",
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
		"COMPONENT_TEMPLATE" => "main_eng",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBSection\",\"DATA\":{\"logic\":\"Equal\",\"value\":48}}]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"BACKGROUND_IMAGE" => "-",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
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
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"ADD_TO_BASKET_ACTION" => "BUY",
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



                                  <!-- <div class="seemore">
                                    Показать больше
                                  </div> -->
                                </div>
                <!-- end catalog -->
<div class="hr"></div>
<!-- begin catalog -->
                <div class="catalog">
                  <div class="titled">
				  		LEATHER AND FUR CLOTHES
                  </div>



                  <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main_eng", 
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
		"MESS_BTN_DETAIL" => "More",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "7",
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
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SECTION_URL" => "#SITE_DIR#/en/catalog/#SECTION_CODE#/",
		"DETAIL_URL" => "#SITE_DIR#/en/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
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
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"PRICE_VAT_INCLUDE" => "Y",
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
		"COMPONENT_TEMPLATE" => "main_eng",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBSection\",\"DATA\":{\"logic\":\"Equal\",\"value\":57}}]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"BACKGROUND_IMAGE" => "-",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
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
		"SEF_RULE" => "",
		"SECTION_CODE_PATH" => "",
		"PROPERTY_CODE_MOBILE" => array(
		)
	),
	false
);?>

                  <!-- <div class="seemore">
                    Показать больше
                  </div> -->
                </div>
<!-- end catalog -->


              </div>


              <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
    $(".sliders").slick({
        slidesToShow: 1,
        arrows: true,
        dots: true,
        prevArrow: '<div class="h_left"></div>',
        nextArrow: '<div class="h_right"></div>',
    })
</script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>