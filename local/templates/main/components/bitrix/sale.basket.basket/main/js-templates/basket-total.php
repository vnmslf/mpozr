<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">
	<div class="basket-checkout-container" data-entity="basket-checkout-aligner">

		<div class="basket-checkout-section">
			<div class="basket-checkout-section-inner<?=(($arParams['HIDE_COUPON'] == 'Y') ? ' justify-content-between' : '')?>">


				<div class="basket-checkout-block basket-checkout-block-btn">
					<a href="/list" class="individ">Заказать индивидуальный пошив</a>
					<button class="btn btn-lg btn-primary basket-btn-checkout{{#DISABLE_CHECKOUT}} disabled{{/DISABLE_CHECKOUT}}"
						data-entity="basket-checkout-button">
						<?=Loc::getMessage('SBB_ORDER')?>
					</button>

				</div>
			</div>
		</div>

		<?
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
		?>
			<div class="basket-coupon-alert-section">
				<div class="basket-coupon-alert-inner">
					{{#COUPON_LIST}}
					<div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?=Loc::getMessage('SBB_COUPON')?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
						<span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?=Loc::getMessage('SBB_DELETE')?>
						</span>
					</div>
					{{/COUPON_LIST}}
				</div>
			</div>
			<?
		}
		?>
	</div>
</script>
