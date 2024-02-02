<?php
use \Bitrix\Landing\Manager;
use \Bitrix\Landing\Assets;
use \Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!Loader::includeModule('landing'))
{
	return;
}

Manager::setTheme();
$assets = Assets\Manager::getInstance();
$assets->addAsset('landing_auto_font_scale');

$APPLICATION->ShowProperty('FooterJS');
?>

<?php if(strpos($_SERVER['REQUEST_URI'], "/en/") !== false): ?>
	<footer>
	<div class="foot">
		<div class="c1">
			<span>ZOLOTOYE RUNO</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
						);?>


			<span>GOODS</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom2_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>


		</div>


		<div class="c1">
			<span>ONLINE STORE</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom3_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>



		</div>

		<div class="c1">
			<span>KNOWLEDGE BASE</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom4_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>


		</div>

		<div class="c1">
			<span>WE ARE IN SOCIAL NETWORKS</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom5_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>

		</div>

		<div class="c1">
			<span>SALES DEPARTMENT</span>

			<div class="divi">

			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/address.php",
				"EDIT_TEMPLATE" => ""),false);
			?>  

			
				
			</div>
			<div class="divi">
				<p>WORKING HOURS:</p>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/time.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
				
			</div>
			<div class="divi">
				<p>TEL.:</p>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/phone.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
			</div>
		</div>

		<div class="pay">
			<img style="max-height: 32px;" src="https://sun1-17.userapi.com/2I4L1KtU1pgYu7cPHdgJUdX8uyhIsZHHLjbIlQ/nO98TvYB6LM.jpg" alt="">
			<img style="max-height: 32px;" src="https://sun9-36.userapi.com/x2E8zeEtFNpv1rizWmJ6X_u824dc7p74rTHf4Q/4byJpQFZ-tg.jpg" alt="">
			<img style="max-height: 32px;" src="https://sun1-24.userapi.com/AFUQPodaaJXB14V3Siria1n52laOrIBpn0T7AA/KuykL-4qrFA.jpg" alt="">
		</div>

		<div class="c2">
		<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/copyrights.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
			
		</div>
		<div class="c2">
			<div class="diz">
			<a style="color: #2b392c;text-decoration:none;" href="argent.ru" target="_blank">Design by argent.ru <img src="<?=SITE_TEMPLATE_PATH?>/img/diz.png" alt=""></a>
			</div>
		</div>


	</div>
</footer>

</section>
</div>
</div>


<div class="bgs">
	<div class="inline">
		<div class="wrap">
			<div class="closi"><img src="/local/templates/main/img/closi.png" alt=""></div>

			<div class="i_menu">
				<div class="m1">
					<span>GOODS</span>
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
								"COMPONENT_TEMPLATE" => "left_multilevel1"
							),
							false
						);?>
				</div>

				<div class="m1">
				<span>ONLINE STORE</span>

<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom",
				array(
					"ROOT_MENU_TYPE" => "bottom3_eng",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_THEME" => "site",
					"CACHE_SELECTED_ITEMS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"COMPONENT_TEMPLATE" => "bottom"
				),
				false
);?>

				</div>


				<div class="m1">
				<span>ZOLOTOYE RUNO</span>

<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom",
				array(
					"ROOT_MENU_TYPE" => "bottom_eng",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_THEME" => "site",
					"CACHE_SELECTED_ITEMS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"COMPONENT_TEMPLATE" => "bottom"
				),
				false
			);?>
				</div>


				<div class="m1">
					<span>KNOWLEDGE BASE</span>

					<?$APPLICATION->IncludeComponent(
									"bitrix:menu",
									"bottom",
									array(
										"ROOT_MENU_TYPE" => "bottom4_eng",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "36000000",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_THEME" => "site",
										"CACHE_SELECTED_ITEMS" => "N",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MAX_LEVEL" => "1",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "Y",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"COMPONENT_TEMPLATE" => "bottom"
									),
									false
					);?>





				</div>

				<div class="m1">
					<span>WE ARE IN SOCIAL NETWORKS</span>
					<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom5_eng",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>

				</div>


			</div>
		</div>
	</div>
</div>

<div class="alerts">
	<div class="close_popup close_up"></div>
	<p>Используя этот сайт, вы подтверждаете своё согласие на использование файлов cookie в соответствии с Политикой в отношении обработки персональных данных пользователей.</p> <div class="close_up" id="succs">Подтверждаю</div>
</div>


<?php else: ?>

<footer>
	<div class="foot">
		<div class="c1">
			<span>Золотое руно</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
						);?>


			<span>Продукция</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom2",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>


		</div>


		<div class="c1">
			<span>Интернет магазин</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom3",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>



		</div>

		<div class="c1">
			<span>База знаний</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom4",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>


		</div>

		<div class="c1">
			<span>Мы в соцсетях</span>

			<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom",
							array(
								"ROOT_MENU_TYPE" => "bottom5",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "bottom"
							),
							false
			);?>

		</div>

		<div class="c1">
			<span>Отдел продаж</span>

			<div class="divi">

			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/address.php",
				"EDIT_TEMPLATE" => ""),false);
			?>  

			
				
			</div>
			<div class="divi">
				<p>Режим работы</p>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/time.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
				
			</div>
			<div class="divi">
				<p>Телефоны:</p>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/phone.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
			</div>
		</div>

		<div class="pay">
			<img style="max-height: 32px;" src="https://sun1-17.userapi.com/2I4L1KtU1pgYu7cPHdgJUdX8uyhIsZHHLjbIlQ/nO98TvYB6LM.jpg" alt="">
			<img style="max-height: 32px;" src="https://sun9-36.userapi.com/x2E8zeEtFNpv1rizWmJ6X_u824dc7p74rTHf4Q/4byJpQFZ-tg.jpg" alt="">
			<img style="max-height: 32px;" src="https://sun1-24.userapi.com/AFUQPodaaJXB14V3Siria1n52laOrIBpn0T7AA/KuykL-4qrFA.jpg" alt="">
		</div>

		<div class="c2">
		<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/copyrights.php",
				"EDIT_TEMPLATE" => ""),false);
				?>  
			
		</div>
		<div class="c2">
			<div class="diz">
				<a style="color: #2b392c;text-decoration:none;" href="argent.ru" target="_blank">Design by argent.ru <img src="<?=SITE_TEMPLATE_PATH?>/img/diz.png" alt=""></a>
			</div>
		</div>


	</div>
</footer>

</section>
</div>
</div>


<div class="bgs">
	<div class="inline">
		<div class="wrap">
			<div class="closi"><img src="/local/templates/main/img/closi.png" alt=""></div>

			<div class="i_menu">
				<div class="m1">
					<span>Каталог продукции</span>
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
				</div>

				<div class="m1">
					<span>Интернет магазин</span>
					<ul>
						<li><a href="/oplata/">ОПЛАТА</a></li>
						<li><a href="/dostavka/">ДОСТАВКА</a></li>
						<li><a href="/personal/orders/?filter_history=Y">МОИ ЗАКАЗЫ</a></li>
						<li><a href="/vozvrat/">ВОЗВРАТ И ВОЗМЕЩЕНИЕ</a></li>
						<li><a href="#">КОНФИДЕНЦИАЛЬНОСТЬ</a></li>
					</ul>
				</div>



				<div class="m1">
					<span>Магазин</span>
					<ul>
						<li><a href="/contacts/">Контакты</a></li>
					</ul>
				</div>

				<div class="m1">
					<span>Золотое руно</span>
					<ul>
						<li><a href="/group/">О ГРУППЕ</a></li>
						<li><a href="/news/">НОВОСТИ</a></li>
						<li><a href="/individual/">ИНДИВИДУАЛЬНЫЙ ПОШИВ</a></li>
						<li><a href="/licenses/">ЛИЦЕНЗИИ И СЕРТИФИКАТЫ</a></li>
						<li><a href="/testimonials/">ОТЗЫВЫ</a></li>
						<li><a href="/contacts/">КОНТАКТЫ</a></li>
					</ul>
				</div>


				<div class="m1">
					<span>База знаний</span>
					<ul>
						<li><a href="/materials/">ГИД ПО МАТЕРИАЛАМ</a></li>
						<li><a href="/guide/">ГИД ПО РАЗМЕРАМ</a></li>
						<li><a href="/ustav/">ОДЕВАЙТЕСЬ ПО УСТАВУ</a></li>
					</ul>





				</div>

				<div class="m1">
					<span>Мы в соцсетях</span>
						<ul>
							<li><a href="#">Вконтакте</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">youtube</a></li>
						</ul>
				</div>


			</div>
		</div>
	</div>
</div>

<div class="alerts">
	<div class="close_popup close_up"></div>
	<p>Используя этот сайт, вы подтверждаете своё согласие на использование файлов cookie в соответствии с Политикой в отношении обработки персональных данных пользователей.</p> <div class="close_up" id="succs">Подтверждаю</div>
</div>



<?php endif; ?>


<script src="/local/templates/main/js/cookie.js"></script>

<script>
	$('.menu').click(function(){
		$('.bgs').addClass('active')
	})

	$('.closi').click(function(){
		$('.bgs').removeClass('active')
	})

	if($('.left_m li').children().hasClass('item-selected')) {
		$('.item-selected').parents('.parents').addClass('active')
	}


</script>

<script>
        if(Cookies.get("message") != "yes") {
            function open() {
                 jQuery(".alerts").addClass("c15")
            }
            setTimeout(open, 1300);
        }

    		 jQuery(".close_up").click(function(){
                jQuery(".alerts").removeClass("c15")
                Cookies.set("message", "yes", { expires: 9999 })
            })

function opener2() {
	jQuery(".closer").addClass("action")
}

if(Cookies.get("popup") != "yes") {
            function opener() {
                 jQuery(".popuper").addClass("action")
				 setTimeout(opener2, 1300);
            }
        setTimeout(opener, 1300);
}



		$('.closer').click(function(){
			document.cookie = 'popup=yes; max-age=300';
			$('.popuper').removeClass('action')
		})


		$('.t2 .search img').click(function(){
			$('.t2 form').toggleClass('action');
		})


			
</script>

 
	


<?$APPLICATION->ShowProperty('BeforeBodyClose');?>
</body>
</html>
