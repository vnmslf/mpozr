<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/listing__detail.min.css');

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);


$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-primary' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-primary' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>


<div class="bx-catalog-element<?=$themeClass?>" id="<?=$itemIds['ID']?>" itemscope itemtype="http://schema.org/Product">

<div class="wrap_list">
			<div class="prods">

				<div class="prod_l">
					<?
					if ($arParams['DISPLAY_NAME'] === 'Y')
					{
						?>
						<h1><?=$name?></h1>

						<? if ($arResult["PROPERTIES"]['skys']['VALUE']){?>
							<div class="sku">Код товара: <?=$arResult["PROPERTIES"]["skys"]['VALUE']?></div>
						<?}?> 



						<?
					}
					?>

					<div class="thumber">

						<div class="tumn">



							<div class="product-item-detail-slider-container" id="<?=$itemIds['BIG_SLIDER_ID']?>">
								<span class="product-item-detail-slider-close" data-entity="close-popup"></span>
								<div class="product-item-detail-slider-block
									<?=($arParams['IMAGE_RESOLUTION'] === '1by1' ? 'product-item-detail-slider-block-square' : '')?>"
									data-entity="images-slider-block">
									<span class="product-item-detail-slider-left" data-entity="slider-control-left" style="display: none;"></span>
									<span class="product-item-detail-slider-right" data-entity="slider-control-right" style="display: none;"></span>
									<?
									if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y')
									{
										if ($haveOffers)
										{
											?>
											<div class="product-item-label-ring <?=$discountPositionClass?>"
												id="<?=$itemIds['DISCOUNT_PERCENT_ID']?>"
												style="display: none;">
											</div>
											<?
										}
										else
										{
											if ($price['DISCOUNT'] > 0)
											{
												?>
												<div class="product-item-label-ring <?=$discountPositionClass?>"
													id="<?=$itemIds['DISCOUNT_PERCENT_ID']?>"
													title="<?=-$price['PERCENT']?>%">
													<span><?=-$price['PERCENT']?>%</span>
												</div>
												<?
											}
										}
									}
									?>
									<div class="product-item-detail-slider-images-container" data-entity="images-container">
										<?
										if (!empty($actualItem['MORE_PHOTO']))
										{
											foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
											{
												?>
												<div class="product-item-detail-slider-image<?=($key == 0 ? ' active' : '')?>" data-entity="image" data-id="<?=$photo['ID']?>">
													<img src="<?=$photo['SRC']?>" alt="<?=$alt?>" title="<?=$title?>"<?=($key == 0 ? ' itemprop="image"' : '')?>>
												</div>
												<?
											}
										}

										if ($arParams['SLIDER_PROGRESS'] === 'Y')
										{
											?>
											<div class="product-item-detail-slider-progress-bar" data-entity="slider-progress-bar" style="width: 0;"></div>
											<?
										}
										?>
									</div>
								</div>
								<?
								if ($showSliderControls)
								{
									if ($haveOffers)
									{
										foreach ($arResult['OFFERS'] as $keyOffer => $offer)
										{
											if (!isset($offer['MORE_PHOTO_COUNT']) || $offer['MORE_PHOTO_COUNT'] <= 0)
												continue;

											$strVisible = $arResult['OFFERS_SELECTED'] == $keyOffer ? '' : 'none';
											?>
											<div class="product-item-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_OF_ID'].$offer['ID']?>" style="display: <?=$strVisible?>;">
												<?
												foreach ($offer['MORE_PHOTO'] as $keyPhoto => $photo)
												{
													?>
													<div class="product-item-detail-slider-controls-image<?=($keyPhoto == 0 ? ' active' : '')?>"
														data-entity="slider-control" data-value="<?=$offer['ID'].'_'.$photo['ID']?>">
														<img src="<?=$photo['SRC']?>">
													</div>
													<?
												}
												?>
											</div>
											<?
										}
									}
									else
									{
										?>
										<div class="product-item-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_ID']?>">
											<?
											if (!empty($actualItem['MORE_PHOTO']))
											{
												foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
												{
													?>
													<div class="product-item-detail-slider-controls-image<?=($key == 0 ? ' active' : '')?>"
														data-entity="slider-control" data-value="<?=$photo['ID']?>">
														<img src="<?=$photo['SRC']?>">
													</div>
													<?
												}
											}
											?>
										</div>
										<?
									}
								}
								?>
							</div>

						</div>

					</div>




				</div>

				<div class="prod_r">
					<div class="chars" style="border-bottom:0;margin-bottom: 25px;padding-top:0;">
						<div class="rod">
							<?
							//echo $arResult["PROPERTIES"]["gender"]['VALUE'];
							//Добавлена проверка, если массив, то вывести все значения через запятую
							if(is_array($arResult['PROPERTIES']['gender']['VALUE'])) {
							    echo implode(", ",$arResult['PROPERTIES']['gender']['VALUE']);
							} else {
							    echo $arResult['PROPERTIES']['gender']['VALUE'];
							}
							?>
						</div>
					</div>


					<div class="chars" style="margin-bottom: 0px;padding-top:0;">
						<div class="rod" style="
								text-transform: none;
							flex-basis: 100%;
							margin-bottom: 20px;
							font-size: 15px;
							color: #333333;
							line-height: 21px;
							font-weight: 400;
							">
								<?
									if (
										$arResult['PREVIEW_TEXT'] != ''
										&& (
											$arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'S'
											|| ($arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'E' && $arResult['DETAIL_TEXT'] == '')
										)
									)
									{
										echo $arResult['PREVIEW_TEXT_TYPE'] === 'html' ? $arResult['PREVIEW_TEXT'] : '<p>'.$arResult['PREVIEW_TEXT'].'</p>';
									}

									if ($arResult['DETAIL_TEXT'] != '')
									{
										echo $arResult['DETAIL_TEXT_TYPE'] === 'html' ? $arResult['DETAIL_TEXT'] : '<p>'.$arResult['DETAIL_TEXT'].'</p>';
									}
									?>
						</div>
					</div>


					<div class="chars">
<?if($arResult['PROPERTIES']['gender']['VALUE'][0] == 'Мужская') {
	$link__listing = '/list/zr-ol-man.doc';
} else {
	$link__listing = '/list/zr-ol-woman.doc';
}?>
						<a href="<?=$link__listing?>" class="rod listing">
							<span class="caption">Обмерочный лист</span>
							<span class="action">
								<span class="action__icon">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/advantages/word.png" alt="">
								</span>
								<span class="action__texts">
									<span class="text">Скачать .doc</span>
									<span class="text">Заполнить</span>
									<span class="text">Отправить по Email</span>
								</span>
							</span>
						</a>
						<div class="rodds">
						</div>
					</div>
					<div class="chars">
						<div class="rod">
							Цена
						</div>

						<div class="rodds">
							<?
							if ($arParams['SHOW_OLD_PRICE'] === 'Y')
							{
								?>
								<div class="product-item-detail-price-old mb-1"
									id="<?=$itemIds['OLD_PRICE_ID']?>"
									<?=($showDiscount ? '' : 'style="display: none;"')?>;><?=($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '')?></div>
								<?
							}
							?>

							<div class="flexyble">

							<div class="now_price">
							<?php
								if( $price['PRINT_RATIO_PRICE'] == 0 ) {
									echo 'Расчетная';
								}  else {
								 echo	$price['PRINT_RATIO_PRICE'];
								}
							?> 



							<?php
								if( $arResult["PROPERTIES"]["stared"]['~VALUE'] == 'Да' ) {
									echo '*';
							
								}

								$rsStore = CCatalogStoreProduct::GetList(array(), array('PRODUCT_ID' => $arResult['ID'] , 'STORE_ID' => 1), false, false, array('AMOUNT'));
									if ($arStore = $rsStore->Fetch())
									{
									echo $arStore['AMOUNT'];
									} ?> 
								</div>

								<?php if( $arResult["PROPERTIES"]["strike"]['VALUE'] != ''): ?>
								
									<div class="old_price">
										<?php echo $arResult["PROPERTIES"]["strike"]['VALUE'] ?> руб.
									</div>

									<div class="percent">
										<?php $p100 = $arResult["PROPERTIES"]["strike"]['VALUE'];
											 $p1 = $p100 / 100;

											 $new_p = 100 - (preg_replace('/[^0-9]/', '', $price['PRINT_RATIO_PRICE']) / $p1);

											 echo '<img src="/local/templates/main/img/sale.png" alt="экономия"> Экономия '. round($new_p).'%'
										  ?>
									</div>
								<?php endif; ?> 
						</div>

							

							<?
							if ($arParams['SHOW_OLD_PRICE'] === 'Y')
							{
								?>
								<div class="product-item-detail-economy-price mb-1"
									id="<?=$itemIds['DISCOUNT_PRICE_ID']?>"
									<?=($showDiscount ? '' : 'style="display: none;"')?>><?
										if ($showDiscount)
										{
											echo Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']));
										}
									?></div>
								<?
							}
							?>
						</div>
					</div>


					<? if ($arResult["PROPERTIES"]['personal']['VALUE']){?>
						<div class="chars meridians">
						<div class="rod">
							Средняя расчетная цена индивиудального пошива
							</div>

							<div class="rodds">
								<?=$arResult["PROPERTIES"]["personal"]['VALUE']?> руб.
							</div>
						</div>
					<?}?> 
					
			


					



					<? if ($arResult["PROPERTIES"]['complect']['~VALUE']['TEXT'] != "" ) {?>
				
					<div class="chars">
						<div class="rod">
							КОМПЛЕКТАЦИЯ
						</div>

						<div class="rodds">
							<?=$arResult["PROPERTIES"]["complect"]['~VALUE']['TEXT']?>
						</div>
					</div>

					<?}?> 


					<?if($arResult['PROPERTIES']['zvan']['VALUE']):?>
					<div class="chars">
						<div class="rod">
							ЗВАНИЕ
						</div>

						<div class="rodds">
							<?if(is_array($arResult['PROPERTIES']['zvan']['VALUE'])):?>
							      <?=implode(", ",$arResult['PROPERTIES']['zvan']['VALUE']);?>
							<?else:?>
							       <?=$arResult['PROPERTIES']['zvan']['VALUE'];?>
							<?endif?>

						</div>
					</div>
					<?endif?>


		
					<?if($arResult['PROPERTIES']['vedomstvo']['VALUE']):?>
					<div class="chars">
						<div class="rod">
							Ведомство
						</div>

						<div class="rodds">
							<span> 
							<?if(is_array($arResult['PROPERTIES']['vedomstvo']['VALUE'])):?>
									<?=implode(", ",$arResult['PROPERTIES']['vedomstvo']['VALUE']);?>
								<?else:?>
									<?=$arResult['PROPERTIES']['vedomstvo']['VALUE'];?>
							<?endif?>
											
							</span> 
							
							<? if ($arResult["PROPERTIES"]['ty']['VALUE'] != "" ) {?>
								<span class="adc">ТУ <?=$arResult["PROPERTIES"]["ty"]['VALUE']?></span>
							<? } ?>

							<? if ($arResult["PROPERTIES"]['to']['VALUE'] != "" ) {?>
								<span class="adc">ТО <?=$arResult["PROPERTIES"]["to"]['VALUE']?></span>
							<? } ?>

							<? if ($arResult["PROPERTIES"]['ey']['VALUE'] != "" ) {?>
								<span class="adc">ОИ <?=$arResult["PROPERTIES"]["ey"]['VALUE']?></span>
							<? } ?>


						</div>
					</div>

					<?endif?>

					<?php if( $arResult["PROPERTIES"]["strike"]['VALUE'] == ''): ?>

					<!-- begin add to cart -->
					<?
					$showOffersBlock = $haveOffers && !empty($arResult['OFFERS_PROP']);
					$mainBlockProperties = array_intersect_key($arResult['DISPLAY_PROPERTIES'], $arParams['MAIN_BLOCK_PROPERTY_CODE']);
					$showPropsBlock = !empty($mainBlockProperties) || $arResult['SHOW_OFFERS_PROPS'];
					$showBlockWithOffersAndProps = $showOffersBlock || $showPropsBlock;
					?>
					<div class="<?=($showBlockWithOffersAndProps ? "col-md-5 col-lg-6" : "col-md-4"); ?>">
						<div class="row">
							<?
							if ($showBlockWithOffersAndProps)
							{
							?>
							<div class="col-lg-5">
								<?
								foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName)
								{
									switch ($blockName)
									{
										case 'sku':
											if ($showOffersBlock)
											{
												?>
												<div class="mb-3" id="<?=$itemIds['TREE_ID']?>">
													<?
													foreach ($arResult['SKU_PROPS'] as $skuProperty)
													{
														if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))
															continue;

														$propertyId = $skuProperty['ID'];
														$skuProps[] = array(
															'ID' => $propertyId,
															'SHOW_MODE' => $skuProperty['SHOW_MODE'],
															'VALUES' => $skuProperty['VALUES'],
															'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
														);
														?>
														<div data-entity="sku-line-block" class="mb-3 flexy">
															<div class="product-item-scu-container-title">
																<?=htmlspecialcharsEx($skuProperty['NAME'])?>
																<span>гид по размерам</span>
															</div>
															<div class="product-item-scu-container">
																<div class="product-item-scu-block">
																	<div class="product-item-scu-list">
																		<ul class="product-item-scu-item-list">
																			<?
																			foreach ($skuProperty['VALUES'] as &$value)
																			{
																				$value['NAME'] = htmlspecialcharsbx($value['NAME']);

																				if ($skuProperty['SHOW_MODE'] === 'PICT')
																				{
																					?>
																					<li class="product-item-scu-item-color-container" title="<?=$value['NAME']?>"
																						data-treevalue="<?=$propertyId?>_<?=$value['ID']?>"
																						data-onevalue="<?=$value['ID']?>">
																						<div class="product-item-scu-item-color-block">
																							<div class="product-item-scu-item-color" title="<?=$value['NAME']?>"
																								style="background-image: url('<?=$value['PICT']['SRC']?>');">
																							</div>
																						</div>
																					</li>
																					<?
																				}
																				else
																				{
																					?>
																					<li class="product-item-scu-item-text-container" title="<?=$value['NAME']?>"
																						data-treevalue="<?=$propertyId?>_<?=$value['ID']?>"
																						data-onevalue="<?=$value['ID']?>">
																						<div class="product-item-scu-item-text-block">
																							<div class="product-item-scu-item-text"><?=$value['NAME']?><span>ru</span></div>
																						</div>
																					</li>
																					<?
																				}
																			}
																			?>
																		</ul>
																		<div style="clear: both;"></div>
																	</div>
																</div>
															</div>
														</div>
														<?
													}
													?>
												</div>
												<?
											}

											break;

										case 'props':
											if ($showPropsBlock)
											{
												?>
												<div class="mb-3">
													<?
													if (!empty($mainBlockProperties))
													{
														?>
														<ul class="product-item-detail-properties">
															<?
															foreach ($mainBlockProperties as $property)
															{
																?>
																<li class="product-item-detail-properties-item">
																	<span class="product-item-detail-properties-name text-muted"><?=$property['NAME']?></span>
																	<span class="product-item-detail-properties-dots"></span>
																	<span class="product-item-detail-properties-value"><?=(is_array($property['DISPLAY_VALUE'])
																			? implode(' / ', $property['DISPLAY_VALUE'])
																			: $property['DISPLAY_VALUE'])?>
																	</span>
																</li>
																<?
															}
															?>
														</ul>
														<?
													}

													if ($arResult['SHOW_OFFERS_PROPS'])
													{
														?>
														<ul class="product-item-detail-properties" id="<?=$itemIds['DISPLAY_MAIN_PROP_DIV']?>"></ul>
														<?
													}
													?>
												</div>
												<?
											}

											break;
									}
								}
								?>
							</div>
							<?
							}
							?>
							<div class="<?=($showBlockWithOffersAndProps ? "col-lg-7" : "col-lg"); ?>">
								<div class="product-item-detail-pay-block">
									<?
									foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName)
									{
										switch ($blockName)
										{
											case 'rating':
												if ($arParams['USE_VOTE_RATING'] === 'Y')
												{
													?>
													<div class="mb-3">
														<?
														$APPLICATION->IncludeComponent(
															'bitrix:iblock.vote',
															'bootstrap_v4',
															array(
																'CUSTOM_SITE_ID' => isset($arParams['CUSTOM_SITE_ID']) ? $arParams['CUSTOM_SITE_ID'] : null,
																'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
																'IBLOCK_ID' => $arParams['IBLOCK_ID'],
																'ELEMENT_ID' => $arResult['ID'],
																'ELEMENT_CODE' => '',
																'MAX_VOTE' => '5',
																'VOTE_NAMES' => array('1', '2', '3', '4', '5'),
																'SET_STATUS_404' => 'N',
																'DISPLAY_AS_RATING' => $arParams['VOTE_DISPLAY_AS_RATING'],
																'CACHE_TYPE' => $arParams['CACHE_TYPE'],
																'CACHE_TIME' => $arParams['CACHE_TIME']
															),
															$component,
															array('HIDE_ICONS' => 'Y')
														);
														?>
													</div>
													<?
												}

												break;

											case 'price':
												?>
												<div class="mb-3" style="display:none;">
													<?
													if ($arParams['SHOW_OLD_PRICE'] === 'Y')
													{
														?>
														<div class="product-item-detail-price-old mb-1"
															id="<?=$itemIds['OLD_PRICE_ID']?>"
															<?=($showDiscount ? '' : 'style="display: none;"')?>;><?=($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '')?></div>
														<?
													}
													?>

													<div class="product-item-detail-price-current mb-1" id="<?=$itemIds['PRICE_ID']?>"><?=$price['PRINT_RATIO_PRICE']?></div>

													<?
													if ($arParams['SHOW_OLD_PRICE'] === 'Y')
													{
														?>
														<div class="product-item-detail-economy-price mb-1"
															id="<?=$itemIds['DISCOUNT_PRICE_ID']?>"
															<?=($showDiscount ? '' : 'style="display: none;"')?>><?
																if ($showDiscount)
																{
																	echo Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']));
																}
															?></div>
														<?
													}
													?>
												</div>
												<?
												break;

											case 'priceRanges':
												if ($arParams['USE_PRICE_COUNT'])
												{
													$showRanges = !$haveOffers && count($actualItem['ITEM_QUANTITY_RANGES']) > 1;
													$useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';
													?>
													<div class="mb-3"
														<?=$showRanges ? '' : 'style="display: none;"'?>
														data-entity="price-ranges-block">
														<?
														if ($arParams['MESS_PRICE_RANGES_TITLE'])
														{
															?>
															<div class="product-item-detail-info-container-title text-center">
																<?= $arParams['MESS_PRICE_RANGES_TITLE'] ?>
																<span data-entity="price-ranges-ratio-header">
																(<?= (Loc::getMessage(
																		'CT_BCE_CATALOG_RATIO_PRICE',
																		array('#RATIO#' => ($useRatio ? $measureRatio : '1').' '.$actualItem['ITEM_MEASURE']['TITLE'])
																	)) ?>)
															</span>
															</div>
															<?
														}
														?>
														<ul class="product-item-detail-properties" data-entity="price-ranges-body">
															<?
															if ($showRanges)
															{
																foreach ($actualItem['ITEM_QUANTITY_RANGES'] as $range)
																{
																	if ($range['HASH'] !== 'ZERO-INF')
																	{
																		$itemPrice = false;

																		foreach ($arResult['ITEM_PRICES'] as $itemPrice)
																		{
																			if ($itemPrice['QUANTITY_HASH'] === $range['HASH'])
																			{
																				break;
																			}
																		}

																		if ($itemPrice)
																		{
																			?>
																			<li class="product-item-detail-properties-item">
																				<span class="product-item-detail-properties-name text-muted">
																					<?
																					echo Loc::getMessage(
																							'CT_BCE_CATALOG_RANGE_FROM',
																							array('#FROM#' => $range['SORT_FROM'].' '.$actualItem['ITEM_MEASURE']['TITLE'])
																						).' ';

																					if (is_infinite($range['SORT_TO']))
																					{
																						echo Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
																					}
																					else
																					{
																						echo Loc::getMessage(
																							'CT_BCE_CATALOG_RANGE_TO',
																							array('#TO#' => $range['SORT_TO'].' '.$actualItem['ITEM_MEASURE']['TITLE'])
																						);
																					}
																					?>
																				</span>
																				<span class="product-item-detail-properties-dots"></span>
																				<span class="product-item-detail-properties-value"><?=($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE'])?></span>
																			</li>
																			<?
																		}
																	}
																}
															}
															?>
														</ul>
													</div>
													<?
													unset($showRanges, $useRatio, $itemPrice, $range);
												}

												break;

											case 'quantityLimit':
												if ($arParams['SHOW_MAX_QUANTITY'] !== 'N')
												{
													if ($haveOffers)
													{
														?>
														<div class="mb-3" id="<?=$itemIds['QUANTITY_LIMIT']?>" style="display: none;">
															<div class="product-item-detail-info-container-title text-center">
																<?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:
															</div>
															<span class="product-item-quantity" data-entity="quantity-limit-value"></span>
														</div>
														<?
													}
													else
													{
														if (
															$measureRatio
															&& (float)$actualItem['PRODUCT']['QUANTITY'] > 0
															&& $actualItem['CHECK_QUANTITY']
														)
														{
															?>
															<div class="mb-3 text-center" id="<?=$itemIds['QUANTITY_LIMIT']?>">
																<span class="product-item-detail-info-container-title"><?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:</span>
																<span class="product-item-quantity" data-entity="quantity-limit-value">
																	<?
																	if ($arParams['SHOW_MAX_QUANTITY'] === 'M')
																	{
																		if ((float)$actualItem['PRODUCT']['QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR'])
																		{
																			echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
																		}
																		else
																		{
																			echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
																		}
																	}
																	else
																	{
																		echo $actualItem['PRODUCT']['QUANTITY'].' '.$actualItem['ITEM_MEASURE']['TITLE'];
																	}
																	?>
																</span>
															</div>
															<?
														}
													}
												}

												break;

											case 'quantity':
												if ($arParams['USE_PRODUCT_QUANTITY'])
												{
													?>
													<div class="mb-3" <?= (!$actualItem['CAN_BUY'] ? ' style="display: none;"' : '') ?> data-entity="quantity-block">


														<div class="product-item-amount">
															<div class="product-item-amount-field-container">

																<input class="product-item-amount-field" id="<?=$itemIds['QUANTITY_ID']?>" type="number" value="<?=$price['MIN_QUANTITY']?>">

																<div class="fl">


																	<span class="product-item-amount-field-btn-plus no-select" id="<?=$itemIds['QUANTITY_UP_ID']?>"></span>
																	<span class="product-item-amount-field-btn-minus no-select" id="<?=$itemIds['QUANTITY_DOWN_ID']?>"></span>


																</div>




																<span style="display:none;" class="product-item-amount-description-container">
																	<span id="<?=$itemIds['QUANTITY_MEASURE']?>"><?=$actualItem['ITEM_MEASURE']['TITLE']?></span>
																	<span  id="<?=$itemIds['PRICE_TOTAL']?>"></span>
																</span>
															</div>
														</div>
													</div>
													<?
												}

												break;

											case 'buttons':
												?>
												<div data-entity="main-button-container" class="mb-3">
													<div id="<?=$itemIds['BASKET_ACTIONS_ID']?>" style="display: <?=($actualItem['CAN_BUY'] ? '' : 'none')?>;">
														<?
														if ($showAddBtn)
														{
															?>
															<div class="mb-3">
																<a class="btn <?=$showButtonClassName?> product-item-detail-buy-button"
																	id="<?=$itemIds['ADD_BASKET_LINK']?>"
																	href="javascript:void(0);">
																	<?=$arParams['MESS_BTN_ADD_TO_BASKET']?>
																</a>
															</div>
															<?
														}

														if ($showBuyBtn)
														{
															?>
															<div class="mb-3">
																<a class="btn <?=$buyButtonClassName?> product-item-detail-buy-button"
																	id="<?=$itemIds['BUY_LINK']?>"
																	href="javascript:void(0);">
																	<?=$arParams['MESS_BTN_BUY']?>
																</a>
															</div>
															<?
														}
														?>
													</div>
												</div>
												<?
												if ($showSubscribe)
												{
													?>
													<div class="mb-3">
														<?
														$APPLICATION->IncludeComponent(
															'bitrix:catalog.product.subscribe',
															'',
															array(
																'CUSTOM_SITE_ID' => isset($arParams['CUSTOM_SITE_ID']) ? $arParams['CUSTOM_SITE_ID'] : null,
																'PRODUCT_ID' => $arResult['ID'],
																'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
																'BUTTON_CLASS' => 'btn u-btn-outline-primary product-item-detail-buy-button',
																'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
																'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
															),
															$component,
															array('HIDE_ICONS' => 'Y')
														);
														?>
													</div>
													<?
												}
												?>
												<div class="mb-3" id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" style="display: <?=(!$actualItem['CAN_BUY'] ? '' : 'none')?>;">
													<a class="btn btn-primary product-item-detail-buy-button" href="javascript:void(0)" rel="nofollow"><?=$arParams['MESS_NOT_AVAILABLE']?></a>
												</div>
												<?
												break;
										}
									}

									if ($arParams['DISPLAY_COMPARE'])
									{
										?>
										<div class="product-item-detail-compare-container">
											<div class="product-item-detail-compare">
												<div class="checkbox">
													<label class="m-0" id="<?=$itemIds['COMPARE_LINK']?>">
														<input type="checkbox" data-entity="compare-checkbox">
														<span data-entity="compare-title"><?=$arParams['MESS_BTN_COMPARE']?></span>
													</label>
												</div>
											</div>
										</div>
										<?
									}
									?>
								</div>
							</div>
						</div>
					</div>


					<!-- end add to cart -->

					<?endif?>


					<div class="preims_c">
						<div class="prim_c">
							<?$dd = CFile::GetPath($arResult["PROPERTIES"]["p1img"]["VALUE"]);?>
							<img src="<?echo $dd;?>" />
								<span><?=$arResult["PROPERTIES"]["p1"]['VALUE']?></span>
						</div>
						<div class="prim_c">
							<?$dd = CFile::GetPath($arResult["PROPERTIES"]["p2img"]["VALUE"]);?>
							<img src="<?echo $dd;?>" />
								<span><?=$arResult["PROPERTIES"]["p2"]['VALUE']?></span>
						</div>
						<div class="prim_c">
							<?$dd = CFile::GetPath($arResult["PROPERTIES"]["p3img"]["VALUE"]);?>
							<img src="<?echo $dd;?>" />
								<span><?=$arResult["PROPERTIES"]["p3"]['VALUE']?></span>
						</div>
						<div class="prim_c">
							<?$dd = CFile::GetPath($arResult["PROPERTIES"]["p4img"]["VALUE"]);?>
							<img src="<?echo $dd;?>" />
								<span><?=$arResult["PROPERTIES"]["p4"]['VALUE']?></span>
						</div>
					</div>



					<div class="chared">
						<div class="rod">
							Доставка
						</div>

						<div class="rodds">
						Доставка осуществляется Курьерской службой Почты России, согласно тарифа в ваш регион. 
Стоимость доставки товара до пункта назначения расчитывается при оформлении заказа. 
В СЛУЧАЕ ОТСУТСТВИЯ ОПЛАТЫ ЗА ДОСТАВКУ, ТОВАР СЧИТАЕТСЯ ОФОРМЛЕННЫМ К САМОВЫВОЗУ.
						</div>
					</div>


					<div class="chared">
						<div class="rod">
							<span>Самовывоз</span>
						</div>

						<div class="rodds">
							Бесплатно по адресу г. Москва, ул. Дмитровское ш.,
							д. 79, стр. 1, этаж 2<br/>
						</div>
					</div>

					<div class="chared">
						<div class="rod">
							<span>В наличии</span>
						</div>

						<div class="rodds">
							В наличии размеры, указанные в карточке товара
						</div>
					</div>


					<div class="chared">
						<div class="rod">
							<span>Индивидуальный<br/> пошив</span>
						</div>

						<div class="rodds">
							Вы можете заказать индивидуальный пошив
							форменной одежды носителей воинских званий
							от рядового до полковника, имеющейся
							в ассортименте фабрики «Золотое Руно»
							и представленной на данном сайте.<br/>
							При оформлении заказа заполните обмерочный лист
							и пришлите нам. Сроки изготовления, стоимость
							и условия доставки обсуждаются индивидуально
							с менеджером Фабрики.
						</div>
					</div>

					<div class="chared">
						<div class="rod">
							<span>Оплата</span>
						</div>

						<div class="rodds">
							Безопасная наличными или банковской картой <br/>
							Внимание! С 1 июля 2019 г. бумажные чеки не выдаются, согласно ФЗ "О применении контрольно-кассовой техники при осуществлении расчётов в Российской Федерации". Вы получите чек на электронную почту. Пожалуйста, убедитесь, что ваша электронная почта в контактных данных указана верно.
						</div>
					</div>

					<div class="chared">
						<div class="rod">
							<span>Возврат</span>
						</div>

						<div class="rodds">
							14 дней, Гарантия качества
						</div>
					</div>

					<div class="chared">
						<div class="rod">
							<span>ПОМОЩЬ ПО ПОКУПКЕ</span>
						</div>

						<div class="rodds">
							Если у вас возникнут вопросы по покупке товара на нашем сайте, обратитесь к инструкции: 
							<a href="https://mpozr.ru/kak-oformit-zakaz/">Как оформить заказ? Пошаговая инструкция</a>.
						</div>
					</div>



					



				</div>

			</div>

</div>


<div class="deser">
	<div class="wrap_list">




		<div class="tabbed">
			<div class="tab_l">
				<h2>СДЕЛАНО В РОССИИ</h2>
				<p><?=$arResult["PROPERTIES"]["russian"]['VALUE']?></p>

				<h2>СОСТАВ</h2>
				<p><?=$arResult["PROPERTIES"]["sostav"]['VALUE']?></p>


				<h2>РАЗМЕРЫ</h2>
				<p>Имеющиеся в наличии размеры изделия представлены в карточке товара. При отсутствии требуемого размера отправьте запрос на <a href="mailto:info@mpozr.ru">e-mail</a>.</p>

			</div>
			<div class="tab_r">

				<h2>ОФОРМИТЕ ЗАКАЗ ВМЕСТЕ С НАМИ</h2>
				<p>Позвоните нам по номеру +7 (495) 744-79-12 (звонок по Россиии бесплатный). С понедельника по пятницу, 09:00-18:00 (МСК), за исключением праздников.</p>

				<h2><a href="/individual/">ИНДИВИДУАЛЬНЫЙ ПОШИВ</a></h2>

				<h2><a href="/dostavka/">СРОКИ И СТОИМОСТЬ ДОСТАВКИ</a></h2>

				<h2><a href="/vozvrat/">ВОЗВРАТ И ВОЗМЕЩЕНИЕ</a></h2>

			</div>
		</div>





	</div>
</div>




<h2 class="recs">Рекомендации</h2>
<h3 class="withp">С этим товаром покупают</h3>

<div class="products">
<?foreach($arResult["PROPERTIES"]["related"]["VALUE"] as $analog):?>
<?$res = CIBlockElement::GetByID($analog);?> 
<?if($ar_res = $res->GetNext())?> 

		<div class="product">


					<a href="<?=$ar_res["DETAIL_PAGE_URL"];?>/" ><img src="<?
						$ID_PICTYRE = $ar_res['PREVIEW_PICTURE'];
						echo $URL = CFile::GetPath($ID_PICTYRE);
					?>" alt=""></a>
					
					<? if ($itemHasDetailUrl): ?>
						<a href="<?=$ar_res["DETAIL_PAGE_URL"];?>/">
					<? endif; ?>
						<span class="named">
							<?=$ar_res["NAME"];?>
						</span>
					<? if ($itemHasDetailUrl): ?>
					</a>
					<? endif; ?>

				</div>

		<?endforeach;?>
</div>




	<meta itemprop="name" content="<?=$name?>" />
	<meta itemprop="category" content="<?=$arResult['CATEGORY_PATH']?>" />
	<?
	if ($haveOffers)
	{
		foreach ($arResult['JS_OFFERS'] as $offer)
		{
			$currentOffersList = array();

			if (!empty($offer['TREE']) && is_array($offer['TREE']))
			{
				foreach ($offer['TREE'] as $propName => $skuId)
				{
					$propId = (int)substr($propName, 5);

					foreach ($skuProps as $prop)
					{
						if ($prop['ID'] == $propId)
						{
							foreach ($prop['VALUES'] as $propId => $propValue)
							{
								if ($propId == $skuId)
								{
									$currentOffersList[] = $propValue['NAME'];
									break;
								}
							}
						}
					}
				}
			}

			$offerPrice = $offer['ITEM_PRICES'][$offer['ITEM_PRICE_SELECTED']];
			?>
			<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<meta itemprop="sku" content="<?=htmlspecialcharsbx(implode('/', $currentOffersList))?>" />
				<meta itemprop="price" content="<?=$offerPrice['RATIO_PRICE']?>" />
				<meta itemprop="priceCurrency" content="<?=$offerPrice['CURRENCY']?>" />
				<link itemprop="availability" href="http://schema.org/<?=($offer['CAN_BUY'] ? 'InStock' : 'OutOfStock')?>" />
			</span>
			<?
		}

		unset($offerPrice, $currentOffersList);
	}
	else
	{
		?>
		<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="<?=$price['RATIO_PRICE']?>" />
			<meta itemprop="priceCurrency" content="<?=$price['CURRENCY']?>" />
			<link itemprop="availability" href="http://schema.org/<?=($actualItem['CAN_BUY'] ? 'InStock' : 'OutOfStock')?>" />
		</span>
		<?
	}
	?>
	<?
	if ($haveOffers)
	{
		$offerIds = array();
		$offerCodes = array();

		$useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

		foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer)
		{
			$offerIds[] = (int)$jsOffer['ID'];
			$offerCodes[] = $jsOffer['CODE'];

			$fullOffer = $arResult['OFFERS'][$ind];
			$measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

			$strAllProps = '';
			$strMainProps = '';
			$strPriceRangesRatio = '';
			$strPriceRanges = '';

			if ($arResult['SHOW_OFFERS_PROPS'])
			{
				if (!empty($jsOffer['DISPLAY_PROPERTIES']))
				{
					foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property)
					{
						$current = '<li class="product-item-detail-properties-item">
						<span class="product-item-detail-properties-name">'.$property['NAME'].'</span>
						<span class="product-item-detail-properties-dots"></span>
						<span class="product-item-detail-properties-value">'.(
							is_array($property['VALUE'])
								? implode(' / ', $property['VALUE'])
								: $property['VALUE']
							).'</span></li>';
						$strAllProps .= $current;

						if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']]))
						{
							$strMainProps .= $current;
						}
					}

					unset($current);
				}
			}

			if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1)
			{
				$strPriceRangesRatio = '('.Loc::getMessage(
						'CT_BCE_CATALOG_RATIO_PRICE',
						array('#RATIO#' => ($useRatio
								? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
								: '1'
							).' '.$measureName)
					).')';

				foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range)
				{
					if ($range['HASH'] !== 'ZERO-INF')
					{
						$itemPrice = false;

						foreach ($jsOffer['ITEM_PRICES'] as $itemPrice)
						{
							if ($itemPrice['QUANTITY_HASH'] === $range['HASH'])
							{
								break;
							}
						}

						if ($itemPrice)
						{
							$strPriceRanges .= '<dt>'.Loc::getMessage(
									'CT_BCE_CATALOG_RANGE_FROM',
									array('#FROM#' => $range['SORT_FROM'].' '.$measureName)
								).' ';

							if (is_infinite($range['SORT_TO']))
							{
								$strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
							}
							else
							{
								$strPriceRanges .= Loc::getMessage(
									'CT_BCE_CATALOG_RANGE_TO',
									array('#TO#' => $range['SORT_TO'].' '.$measureName)
								);
							}

							$strPriceRanges .= '</dt><dd>'.($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']).'</dd>';
						}
					}
				}

				unset($range, $itemPrice);
			}

			$jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
			$jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
			$jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
			$jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;
		}

		$templateData['OFFER_IDS'] = $offerIds;
		$templateData['OFFER_CODES'] = $offerCodes;
		unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

		$jsParams = array(
			'CONFIG' => array(
				'USE_CATALOG' => $arResult['CATALOG'],
				'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
				'SHOW_PRICE' => true,
				'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
				'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
				'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
				'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
				'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
				'OFFER_GROUP' => $arResult['OFFER_GROUP'],
				'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
				'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
				'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
				'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
				'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
				'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
				'USE_STICKERS' => true,
				'USE_SUBSCRIBE' => $showSubscribe,
				'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
				'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
				'ALT' => $alt,
				'TITLE' => $title,
				'MAGNIFIER_ZOOM_PERCENT' => 200,
				'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
				'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
				'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
					? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
					: null
			),
			'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
			'VISUAL' => $itemIds,
			'DEFAULT_PICTURE' => array(
				'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
				'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
			),
			'PRODUCT' => array(
				'ID' => $arResult['ID'],
				'ACTIVE' => $arResult['ACTIVE'],
				'NAME' => $arResult['~NAME'],
				'CATEGORY' => $arResult['CATEGORY_PATH']
			),
			'BASKET' => array(
				'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
				'BASKET_URL' => $arParams['BASKET_URL'],
				'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
				'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
				'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
			),
			'OFFERS' => $arResult['JS_OFFERS'],
			'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
			'TREE_PROPS' => $skuProps
		);
	}
	else
	{
		$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
		if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !$emptyProductProperties)
		{
			?>
			<div id="<?=$itemIds['BASKET_PROP_DIV']?>" style="display: none;">
				<?
				if (!empty($arResult['PRODUCT_PROPERTIES_FILL']))
				{
					foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propId => $propInfo)
					{
						?>
						<input type="hidden" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]" value="<?=htmlspecialcharsbx($propInfo['ID'])?>">
						<?
						unset($arResult['PRODUCT_PROPERTIES'][$propId]);
					}
				}

				$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
				if (!$emptyProductProperties)
				{
					?>
					<table>
						<?
						foreach ($arResult['PRODUCT_PROPERTIES'] as $propId => $propInfo)
						{
							?>
							<tr>
								<td><?=$arResult['PROPERTIES'][$propId]['NAME']?></td>
								<td>
									<?
									if (
										$arResult['PROPERTIES'][$propId]['PROPERTY_TYPE'] === 'L'
										&& $arResult['PROPERTIES'][$propId]['LIST_TYPE'] === 'C'
									)
									{
										foreach ($propInfo['VALUES'] as $valueId => $value)
										{
											?>
											<label>
												<input type="radio" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]"
													value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"checked"' : '')?>>
												<?=$value?>
											</label>
											<br>
											<?
										}
									}
									else
									{
										?>
										<select name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]">
											<?
											foreach ($propInfo['VALUES'] as $valueId => $value)
											{
												?>
												<option value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"selected"' : '')?>>
													<?=$value?>
												</option>
												<?
											}
											?>
										</select>
										<?
									}
									?>
								</td>
							</tr>
							<?
						}
						?>
					</table>
					<?
				}
				?>
			</div>
			<?
		}

		$jsParams = array(
			'CONFIG' => array(
				'USE_CATALOG' => $arResult['CATALOG'],
				'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
				'SHOW_PRICE' => !empty($arResult['ITEM_PRICES']),
				'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
				'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
				'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
				'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
				'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
				'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
				'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
				'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
				'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
				'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
				'USE_STICKERS' => true,
				'USE_SUBSCRIBE' => $showSubscribe,
				'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
				'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
				'ALT' => $alt,
				'TITLE' => $title,
				'MAGNIFIER_ZOOM_PERCENT' => 200,
				'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
				'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
				'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
					? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
					: null
			),
			'VISUAL' => $itemIds,
			'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
			'PRODUCT' => array(
				'ID' => $arResult['ID'],
				'ACTIVE' => $arResult['ACTIVE'],
				'PICT' => reset($arResult['MORE_PHOTO']),
				'NAME' => $arResult['~NAME'],
				'SUBSCRIPTION' => true,
				'ITEM_PRICE_MODE' => $arResult['ITEM_PRICE_MODE'],
				'ITEM_PRICES' => $arResult['ITEM_PRICES'],
				'ITEM_PRICE_SELECTED' => $arResult['ITEM_PRICE_SELECTED'],
				'ITEM_QUANTITY_RANGES' => $arResult['ITEM_QUANTITY_RANGES'],
				'ITEM_QUANTITY_RANGE_SELECTED' => $arResult['ITEM_QUANTITY_RANGE_SELECTED'],
				'ITEM_MEASURE_RATIOS' => $arResult['ITEM_MEASURE_RATIOS'],
				'ITEM_MEASURE_RATIO_SELECTED' => $arResult['ITEM_MEASURE_RATIO_SELECTED'],
				'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
				'SLIDER' => $arResult['MORE_PHOTO'],
				'CAN_BUY' => $arResult['CAN_BUY'],
				'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
				'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
				'MAX_QUANTITY' => $arResult['PRODUCT']['QUANTITY'],
				'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
				'CATEGORY' => $arResult['CATEGORY_PATH']
			),
			'BASKET' => array(
				'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
				'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
				'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
				'EMPTY_PROPS' => $emptyProductProperties,
				'BASKET_URL' => $arParams['BASKET_URL'],
				'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
				'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
			)
		);
		unset($emptyProductProperties);
	}

	if ($arParams['DISPLAY_COMPARE'])
	{
		$jsParams['COMPARE'] = array(
			'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
			'COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
			'COMPARE_PATH' => $arParams['COMPARE_PATH']
		);
	}
	?>
</div>
<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>
<?
unset($actualItem, $itemIds, $jsParams);
