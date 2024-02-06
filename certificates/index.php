<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подарочные сертификаты");
?>
<div class="wrap">
		<?$APPLICATION->IncludeComponent(
	"tarakud:certificate.list", 
	"certificates", 
	array(
		"BASKET_URL" => "/personal/cart/",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"ELEMENT_SORT_FIELD" => "SORT",
		"ELEMENT_SORT_ORDER" => "ASC",
		"FORM_FIELDS" => array(
			0 => "phone",
			1 => "text",
			2 => "",
		),
		"FORM_FIELDS_REQUIRED" => array(
			0 => "phone",
			1 => "",
		),
		"IMG_HEIGHT" => "500",
		"IMG_WIDTH" => "707",
		"PAGE_URL" => "/certificates/",
		"SET_TITLE" => "Y",
		"COMPONENT_TEMPLATE" => "certificates"
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>