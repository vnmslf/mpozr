<?

Bitrix\Main\Loader::includeModule("tarakud.certificate");
$arResult["BASKET_ITEM_RENDER_DATA"] = Tarakud\Certificate\Picture\CertificatePictureTable::getBasketPicture($arResult["BASKET_ITEM_RENDER_DATA"]);

?>