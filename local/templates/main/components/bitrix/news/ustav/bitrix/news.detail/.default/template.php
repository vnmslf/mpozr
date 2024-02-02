<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="nws">
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time" style="color:#999999;font-size:12px;margin-bottom:20px;    display: block;"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>


	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h1><?=$arResult["NAME"]?></h1>
	<?endif;?>

	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<div class="ust">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>

	<div class="variants">
		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>
	</div>


	<div class="variants">
		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>
	</div>


	<div class="variants">
		<h2>ШИТЬЕ НА ОБМУНДИРОВАНИИ ОСОБОЙ ЦЕРЕМОНИАЛЬНОЙ ПАРАДНОЙ ФОРМЫ ОДЕЖДЫ ВОЕННОСЛУЖАЩИХ ПОЧЕТНОГО КАРАУЛА ВООРУЖЕННЫХ СИЛ</h2>
		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>
	</div>


	<div class="variants">
		<h2>ШИТЬЕ НА ОБМУНДИРОВАНИИ ОСОБОЙ ЦЕРЕМОНИАЛЬНОЙ ПАРАДНОЙ ФОРМЫ ОДЕЖДЫ ВОЕННОСЛУЖАЩИХ ПОЧЕТНОГО КАРАУЛА ВООРУЖЕННЫХ СИЛ</h2>
		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>

		<div class="variant">
			<img src="/local/templates/main/img/forma1.png" alt="">
			<span>Зимняя парадная форма одежды<br/><br/>для строя ВВС, ВКС, ВДВ</span>
		</div>
	</div>

	<div class="ust">
		<h2>Приложение №2<br/>
		ПОРЯДОК СМЕШЕНИЯ ПРЕДМЕТОВ СУЩЕСТВУЮЩЕЙ И НОВОЙ ВОЕННОЙ ФОРМЫ ОДЕЖДЫ В ВООРУЖЕННЫХ СИЛАХ РОССИЙСКОЙ ФЕДЕРАЦИИ</h2>

		Приложение N 2<br/>
		к приказу<br/>
		Министра обороны<br/>
		Российской Федерации<br/>
		от 22 июня 2015 года N 300<br/>
		<br/><br/>
		1. Допустить в течение трех лет смешение следующих предметов существующей и новой военной формы одежды:<br/>
		папах из каракуля серого цвета с колпаком установленного цвета и беретов из каракуля серого (черного) цвета;<br/>
		пальто   шерстяных с воротниками меховыми или без них и курток демисезонных защитного (синего, черного) цвета при парадной и повседневной военной форме одежды;<br/>
		кителей, жакетов и юбок шерстяных цвета морской волны, (синего, черного) цвета при парадной военной форме одежды;<br/>
		кителей, жакетов и юбок шерстяных защитного (синего, черного) цвета при повседневной военной форме одежды;<br/>
		рубашек, блузок защитного (голубого, кремового) цвета при парадной и повседневной военной форме одежды;<br/>
		рубашек, блузок белого цвета при парадной военной форме одежды;<br/>
		фуражек летних полевых, костюмов летних и зимних полевых камуфлированной расцветки.<br/>
		<br/>
		2. Смешение предметов военной формы одежды с другими предметами одежды, обуви и снаряжения, не предусмотренное настоящим Порядком, не допускается.
	</div>


	<?$rs=CIBlockElement::GetList(array("active_from" => "desc"), array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arResult["IBLOCK_ID"]), false, array("nElementID"=>$arResult["ID"], "nPageSize"=>1), array("ID"));
	while($ar=$rs->GetNext())
	{ $page[] = $ar["ID"]; }?>


	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>

	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>



		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
