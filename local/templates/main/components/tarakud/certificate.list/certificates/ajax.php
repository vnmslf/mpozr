<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
define("NO_AGENT_CHECK", true);
define("PUBLIC_AJAX_MODE", true);
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

$arData = array("status"=>"no", "answer"=>"");

if (empty($arResult["ERROR"]))
{
	$arData["status"] = "ok";
}
else
{
	foreach ($arResult["ERROR"] as $item)
	{
		$arData["answer"] .= "<p>".$item."</p>";
	}
}

$arData["answer"] = $APPLICATION->ConvertCharset($arData["answer"], "windows-1251", "utf-8");
$APPLICATION->RestartBuffer();
//echo CUtil::PhpToJSObject($arData);
echo json_encode($arData);
die();
?>