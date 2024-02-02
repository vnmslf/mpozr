<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>
<div class="wrap contact_wrap">
	<div class="contacts_title">
		 Запрошенная страница не найдена, код ошибки 404
	</div>
	<p>Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</p>
	<p>Вернитесь на <a href="<?=SITE_DIR?>">главную страницу</a> или воспользуйтесь картой сайта.</p>
	<div class="map-columns row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="bx-maps-title">Карта сайта:</div>
		</div>
	</div>

	<div class="col-sm-offset-2 col-sm-4">
		<div class="bx-map-title"><i class="fa fa-leanpub"></i> Каталог</div>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "tree", Array(
	"COMPONENT_TEMPLATE" => "tree",
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"IBLOCK_ID" => "2",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	),
	false
);
		?>
	</div>

	<div class="col-sm-offset-1 col-sm-4">
		<div class="bx-map-title"><i class="fa fa-info-circle"></i> О магазине</div>
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:main.map",
			".default",
			array(
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"SET_TITLE" => "N",
				"LEVEL" => "3",
				"COL_NUM" => "2",
				"SHOW_DESCRIPTION" => "Y",
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);?>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>