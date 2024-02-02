<?
use Bitrix\Main\Localization\Loc as Loc;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
//$this->addExternalCss("/bitrix/css/main/bootstrap_v4/bootstrap.css");
use Bitrix\Main\UI\Extension;
//Extension::load('ui.bootstrap4');
//$this->addExternalCss("/bitrix/css/main/font-awesome.css");

CJSCore::Init(array('masked_input'));
?>

<div class="certificates-wrapper">
<?if (!empty($arResult["CERTIFICATE"])):?>
	<form action="<?=POST_FORM_ACTION_URI?>" name="certificate_type" id="certificate_type" method="post">
		<div class="certificates">
			<?=bitrix_sessid_post()?>
			<?foreach ($arResult["CERTIFICATE"] as $key => $arItem):?>
				<div class="certificate">
					<input type="radio" name="certificate" id="certificate_<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>">
					<?if (!isset($arItem["PICTURE"]) || empty($arItem["PICTURE"])):?>
						<label for="certificate_<?=$arItem["ID"]?>" class="certificate-element certificate-border certificate-<?=$key?>">
						<div class="certificate-title"><?=Loc::getMessage('SERT_ITEM_TITLE')?></div>
						<div class="certificate-price"><?=$arItem["PRICE_FORMAT"]?></div>
					<?else:?>
						<label for="certificate_<?=$arItem["ID"]?>" class="certificate-element" style="/*background: url(<?=$arItem["PICTURE"]["src"]?>)*/">
						<img src="<?=$arItem["PICTURE"]["src"]?>" width="<?=$arItem["PICTURE"]["width"]?>" height="<?=$arItem["PICTURE"]["height"]?>" alt="<?=Loc::getMessage('SERT_ITEM_TITLE')?> <?=$arItem["PRICE_FORMAT"]?>">
					<?endif;?>
						
						<input type="submit" name="certificate-btn" class="btn btn-default btn-sm" value="<?=Loc::getMessage('SERT_CERT_BUY')?>"
						onClick="certificatePopup(
						'<?=Loc::getMessage('SERT_TITLE')?>',
						'<?=Loc::getMessage('SERT_POPUP_BUY')?>',
						'<?=Loc::getMessage('SERT_POPUP_CLOSE')?>',
						'<?=POST_FORM_ACTION_URI?>',
						'<?=$arItem["ID"]?>');return false;">
						<div class="clearfix"></div>
					</label>
				</div>
			<?endforeach;?>
		</div>
	</form>
	
	<div class="row" id="certificate-popup">
		<div id="certificate-popup-form">
			<div id="certificate-loader"></div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div id="certificate-error"></div>
			</div>
			<div class="col-md-12 form-group">
				<label for="certificate-name"><span class="req">*</span> <?=Loc::getMessage('SERT_NAME_BUYER')?></label>
				<input class="form-control js-required" type="text" name="name_buyer" id="certificate-name" value="">
			</div>
			<div class="col-md-12 form-group">
				<label for="certificate-email_buyer"><span class="req">*</span> <?=Loc::getMessage('SERT_MAIL_BUYER')?></label>
				<input class="form-control js-required" type="text" name="email_buyer_recipient" id="certificate-email_buyer" value="">
			</div>
			
			<div class="col-md-12 form-group">
				<label for="certificate-name-rec"><span class="req">*</span> <?=Loc::getMessage('SERT_NAME_RECIPIENT')?></label>
				<input class="form-control js-required" type="text" name="name_recipient" id="certificate-name-rec" value="">
			</div>
			<div class="col-md-12 form-group">
				<label for="certificate-email"><span class="req">*</span> <?=Loc::getMessage('SERT_MAIL_RECIPIENT')?></label>
				<input class="form-control js-required" type="text" name="email_recipient" id="certificate-email" value="">
			</div>				
			
			<?foreach ($arParams["FORM_FIELDS"] as $code):?>
				<?
				$class = "";
				?>
				<div class="col-md-12 form-group">
					<label for="certificate-<?=$code?>">
						<?if (isset($arParams["FORM_FIELDS_REQUIRED"][$code])):?>
							<?$class = " js-required";?>
							<span class="req">*</span>
						<?endif;?>
						<?=Loc::getMessage('SERT_RECIPIENT_'.$code)?>
					</label>
					<?if ($code == "text"):?>
						<textarea class="form-control<?=$class?>" name="text_recipient" id="certificate-<?=$code?>"></textarea>
					<?else:?>
						<input class="form-control<?=$class?>" type="text" name="<?=$code?>_recipient" id="certificate-<?=$code?>" value="">
					<?endif;?>
				</div>
			<?endforeach;?>
		</div>
		
		<div class="col-md-12" id="certificate-popup-message" style="display:none;">
			<?
			echo str_replace( "#BASKET_URL#", $arParams["BASKET_URL"], Loc::getMessage('SERT_CONFIRM') );
			?>
		</div>
	</div>
<?
else:
	echo Loc::getMessage('SERT_CERTIFICATE_NULL');
endif;?>
</div>