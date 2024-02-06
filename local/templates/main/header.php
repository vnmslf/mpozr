<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}
?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID;?>" lang="<?= LANGUAGE_ID;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<?
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	IncludeTemplateLangFile(__FILE__);
	$APPLICATION->ShowProperty('BeforeHeadClose');
	?>
	<?$APPLICATION->ShowProperty('AfterHeadOpen');?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="/favicon.png"/>

	<title><? $APPLICATION->ShowTitle(); ?></title>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/order.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/media.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(65342542, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65342542" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171561766-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171561766-1');
</script>
</head>

<body class="<?$APPLICATION->ShowProperty('BodyClass');?>">
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<div class="wrapped">
	<div class="container wrp">
		
		<aside>
		<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>

			<div class="logo">
				<a href="/en/"><img src="<?=SITE_TEMPLATE_PATH?>/img/en/logo.svg" alt=""></a>
				<span>Оnline clothing store</span>
			</div>

		<?php else: ?>

			<div class="logo">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/logo.svg" alt=""></a>
				<span>ИНТЕРНЕТ-МАГАЗИН ОБМУНДИРОВАНИЯ</span>
			</div>

		<?php endif; ?>



			<?/* Если мы НЕ находимся на главной */?>
			<? if ($APPLICATION->GetCurPage(false) !== '/' && $APPLICATION->GetCurPage(false) !== '/news/'): ?>

				<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"left_multilevel_eng",
							array(
								"ROOT_MENU_TYPE" => "leftEng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "3",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "left_multilevel"
							),
							false
						);?>
					<?php else: ?>

						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"left_multilevel1",
							array(
								"ROOT_MENU_TYPE" => "left",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "3",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "left_multilevel1"
							),
							false
						);?>
				
					<? endif; ?>


			<? endif; ?>

<? if ($APPLICATION->GetCurPage(false) == '/news/'): ?>
			<ul class="left_m">
				<li class="parents"><a href="" class="root-item">О группе</a>
							<ul class="children">
								<li><a href="/group/" class="parent">О производственном объединении</a></li>
								<li><a href="/news/" class="parent">Новости</a></li>
								<li><a href="/licenses/" class="parent">Лицензии и сертификаты</a></li>
								<li><a href="/testimonials/" class="parent">Отзывы</a></li>
								<li><a href="/contacts/" class="parent">Контакты</a></li>
						</ul>
				</li>
			</ul>
	<? endif; ?>

<div class="popuper">
	<div class="closer"><img src="<?=SITE_TEMPLATE_PATH?>/img/closer.png" alt=""></div>
	<div class="hiter"><img src="<?=SITE_TEMPLATE_PATH?>/img/hiter.png" alt=""></div>
	<div class="proder">
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
		"LINE_ELEMENT_COUNT" => "1",
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
		"COMPONENT_TEMPLATE" => "main",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":{\"1\":{\"CLASS_ID\":\"CondIBProp:2:44\",\"DATA\":{\"logic\":\"Equal\",\"value\":108}}}}",
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

	</div>
</div>

		</aside>

		<section class="primary">
				<header>
					<div class="topp">
						<div class="t1">
							<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>
								<span><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/phone.svg" alt=""><a href="tel:+74957447912,1">+7 (495) 744-79-12 (доб. 1)<</a></span>
								<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/oplata.svg" alt=""><a href="/en/oplata/">TERMS OF PAYMENT</a></span>
								<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/dostavka.svg" alt=""><a href="/en/dostavka/">DELIVERY</a></span>
								<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/kontakty.svg" alt=""><a href="/en/contacts">CONTACTS</a></span>

							

							<?php else: ?>
								<span><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/phone.svg" alt=""><a href="tel:+74957447912,1">+7 (495) 744-79-12 (доб. 1)</a></span>
									<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/oplata.svg" alt=""><a href="/oplata/">Оплата</a></span>
									<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/dostavka.svg" alt=""><a href="/dostavka/">Доставка</a></span>
									<span><img src="<?=SITE_TEMPLATE_PATH?>/img/header/kontakty.svg" alt=""><a href="/contacts">Контакты</a></span>
							<?php endif; ?>

						</div>
						<div class="t1">
						<?php 
						use \Bitrix\Conversion\Internals\MobileDetect;

						$detect = new MobileDetect;
						 if($detect->isMobile())
						   {

							if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false) {
								echo '<div class="logo">
									<a href="/"><img src="'.SITE_TEMPLATE_PATH.'/img/en/logo.svg" alt=""></a>
								</div>';
							} else {
								echo '<div class="logo">
									<a href="/"><img src="'.SITE_TEMPLATE_PATH.'/img/svg/logo.svg" alt=""></a>
								</div>';
							}


							


						   }
							?>



<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>

<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "bootstrap_v6_eng", Array(
	"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
		"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
		"SHOW_NUM_PRODUCTS" => "N",	// Показывать количество товаров
		"SHOW_TOTAL_PRICE" => "N",	// Показывать общую сумму по товарам
		"SHOW_PRODUCTS" => "N",	// Показывать список товаров
		"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
		"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
		"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
		"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
		"COMPONENT_TEMPLATE" => "bootstrap_v5",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",	// Страница оформления заказа
		"SHOW_EMPTY_VALUES" => "N",	// Выводить нулевые значения в пустой корзине
		"PATH_TO_AUTHORIZE" => "",	// Страница авторизации
		"SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
		"HIDE_ON_BASKET_PAGES" => "Y",	// Не показывать на страницах корзины и оформления заказа
	),
	false
);?>



	
	<?php else: ?>

		<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "bootstrap_v5", Array(
	"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
		"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
		"SHOW_NUM_PRODUCTS" => "N",	// Показывать количество товаров
		"SHOW_TOTAL_PRICE" => "N",	// Показывать общую сумму по товарам
		"SHOW_PRODUCTS" => "N",	// Показывать список товаров
		"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
		"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
		"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
		"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
		"COMPONENT_TEMPLATE" => "bootstrap_v5",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",	// Страница оформления заказа
		"SHOW_EMPTY_VALUES" => "N",	// Выводить нулевые значения в пустой корзине
		"PATH_TO_AUTHORIZE" => "",	// Страница авторизации
		"SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
		"HIDE_ON_BASKET_PAGES" => "Y",	// Не показывать на страницах корзины и оформления заказа
	),
	false
);?>

	<?php endif; ?>

						
				</div>
						
						
					</div>
					<nav>

						

									<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>

										<div class="navw">
										<div class="menu">
											<div>
												<span></span>
											</div>
										</div>

										<?$APPLICATION->IncludeComponent("bitrix:menu", "left_multilevel_eng", Array(
											"ROOT_MENU_TYPE" => "leftEng",	// Тип меню для первого уровня
												"MENU_CACHE_TYPE" => "A",	// Тип кеширования
												"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
												"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
												"MENU_THEME" => "site",
												"CACHE_SELECTED_ITEMS" => "N",
												"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
												"MAX_LEVEL" => "4",	// Уровень вложенности меню
												"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
												"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
												"DELAY" => "N",	// Откладывать выполнение шаблона меню
												"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
												"COMPONENT_TEMPLATE" => "left_multilevel1"
											),
											false
										);?>

										<ul class="secondary">
											<li><a href="/en/individual">INDIVIDUAL SEWING</a></li>
											<li><a href="/en/opt">WHOLESALE CUSTOMERS</a></li>
										</ul>
							</div>


								<div class="t2">
									<a href="/<?php $url = $_SERVER['REQUEST_URI'];	$str = str_replace('/en/', '', $url);echo $str;?>">RU</a>
									<div class="search">
										<img src="<?=SITE_TEMPLATE_PATH?>/img/search.svg" alt="">
										<form action="/catalog_search/">
											<input type="text" name="q" autocomplete="off"  placeholder="Search">
											<button></button>
										</form>
									</div>
								</div>

							<?php else: ?>


						<div class="navw">
								<div class="menu">
									<div>
										<span></span>
									</div>
								</div>

							<?$APPLICATION->IncludeComponent(	
								"bitrix:menu",
								"left_multilevel1",
								array(
									"ROOT_MENU_TYPE" => "left",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "36000000",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_THEME" => "site",
									"CACHE_SELECTED_ITEMS" => "N",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "4",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"COMPONENT_TEMPLATE" => "left_multilevel1"
								),
								false
							);?>

							<ul class="secondary">
								<li><a href="/individual">Индивидуальный пошив</a></li>
								<li><a href="/opt">Оптовым покупателям</a></li>
							</ul>

						</div>

					<div class="t2">
						<a href="/en<?php $url = $_SERVER['REQUEST_URI']; echo $url; ?>">ENG</a>
						<div class="search">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/search.svg" alt="">
							<form action="/catalog_search/">
								<input type="text" name="q" autocomplete="off" placeholder="Поиск по сайту">
								<button></button>
							</form>
						</div>
					</div>

					<?php endif; ?>


					
					

					
					


						
					</nav>
				</header>
