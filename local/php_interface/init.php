<?php 
/**
 * Изменить ORDER_LIST заказа
 */
AddEventHandler("sale", "OnOrderNewSendEmail", "ModifyOrderSaleMails");

function ModifyOrderSaleMails($orderID, &$eventName, &$arFields) {
    if(CModule::IncludeModule('sale') && CModule::IncludeModule('iblock')) {

        //Подключаем шаблон строки таблицы
        include_once  __DIR__. '/mail_item_template.php';

        $strOrderList = [];
        $productsList = [];
        $productIds = [];
        $dbBasketItems = CSaleBasket::GetList(
            ['ID'=>'ASC'],
            ['ORDER_ID' => $orderID],
            false,
            false,
            ['PRODUCT_ID', 'ID', 'NAME', 'QUANTITY', 'PRICE', 'CURRENCY', 'PRODUCT_ID', 'DETAIL_PICTURE',]
        );

        while ($arProps = $dbBasketItems->Fetch()) {

            $productIds[] = $arProps['PRODUCT_ID'];
            $productsList[$arProps['PRODUCT_ID']] = [
				'NAME' => $arProps['NAME'],
				'DETAIL_PAGE_URL' => $arProps['DETAIL_PAGE_URL'],
				'PRODUCT_ID' => $arProps['PRODUCT_ID'],
                'QUANTITY' => $arProps['QUANTITY'],
                'PRICE' => round($arProps['PRICE'], 2),
                'SUM'   => round($arProps['PRICE'] * $arProps['QUANTITY'], 2),
            ];
        }


        $arSelectProducts = ['ID', 'DETAIL_PAGE_URL', 'DETAIL_PICTURE', 'PROPERTY_CML2_ARTICLE'];
        $arFilterProducts = ['IBLOCK_ID'=>2, 'ID'=>$productIds];
        $resProductList = CIBlockElement::GetList(['ID'=>'ASC'], $arFilterProducts, false, false, $arSelectProducts);
        while($obProductList = $resProductList->GetNextElement()) {

            $arFieldsProductList = $obProductList->GetFields();
            $productsList[$arFieldsProductList['ID']]['DETAIL_PAGE_URL'] = 'https://mpozr.ru/' . $arFieldsProductList['DETAIL_PAGE_URL'];
            //$productsList[$arFieldsProductList['ID']]['DETAIL_PICTURE'] = 'https://mpozr.ru/' . ResizeImage($arFieldsProductList['DETAIL_PICTURE']);
            //Заменена неработающая конструкция с ResizeImage
            $image = CFile::ResizeImageGet($arFieldsProductList['DETAIL_PICTURE'], array('width' => 100, 'height' => 100));
            $productsList[$arFieldsProductList['ID']]['DETAIL_PICTURE'] = 'https://mpozr.ru/' . $image['src'];
            $productsList[$arFieldsProductList['ID']]['SKU'] = $arFieldsProductList['PROPERTY_CML2_ARTICLE_VALUE'];
		}
		



        foreach ($productsList as $productItem) {

			$intElementID = $productItem['PRODUCT_ID']; // ID предложения
			$mxResult = CCatalogSku::GetProductInfo(
			$intElementID
			);
			if (is_array($mxResult))
			{
				$idProduct = $mxResult['ID'];
			}
			
            // Неработающий код для получения изображений
			/*$resProducts =  Bitrix\Iblock\ElementTable::getList([
				'select' => ["*"],
				'filter' => [
					"IBLOCK_ID" => 2,
					'ID' => $idProduct
				],
			]);
			
			while ($item = $resProducts->fetch()){
			$pic = 'https://mpozr.ru/' . $item['DETAIL_PICTURE'] = CFile::GetPath($item['DETAIL_PICTURE']);
			}*/


            $layout = $productItemTemplate;
            $arSearch = [
                '#PRODUCT_DETAIL_PAGE#',
                '#PRODUCT_IMG#',
                '#PRODUCT_NAME#',
                '#PRODUCT_QUANTITY#',
                '#PRODUCT_PRICE#',
                '#PRODUCT_COST#',
                '#PRODUCT_SKU#'
            ];

            $arReplace = [
                $productItem['DETAIL_PAGE_URL'],
                $productItem['DETAIL_PICTURE'], //$pic,
                $productItem['NAME'],
                $productItem['QUANTITY'],
                $productItem['PRICE'],
                $productItem['SUM'],
                $productItem['SKU'],
            ];

            $strOrderList[] = str_replace($arSearch, $arReplace, $layout);
        }

        $strOrderList = implode('', $strOrderList);

        //Объявление переменной для письма
        $arFields['ORDER_LIST_TABLE'] = $strOrderList;


        //Получаем параметры доставки
        $dbSalesOrderProps = CSaleOrderPropsValue::GetOrderProps($orderID);
        while ($arSaleOrderProps = $dbSalesOrderProps->Fetch()){

            if($arSaleOrderProps['CODE']=='TIME_DELIVERY_TEXT'){
                //Объявление переменной для письма
                $arFields['DELIVERY_DESCRIPTION'] = $arSaleOrderProps['VALUE'];
            } elseif($arSaleOrderProps['CODE']=='PHONE'){
                $arFields['PHONE'] = $arSaleOrderProps['VALUE'];
            } elseif($arSaleOrderProps['CODE']=='ADDRESS'){
                $arFields['ADDRESS'] = $arSaleOrderProps['VALUE'];
            }
        }

    }
}