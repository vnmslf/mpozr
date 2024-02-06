<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Delivery throughout Russia, Delivery by courier in Moscow within the Moscow Ring Road");
$APPLICATION->SetPageProperty("keywords", "delivery");
$APPLICATION->SetPageProperty("title", "Delivery terms");
$APPLICATION->SetTitle("Delivery");
?><div class="wrap contact_wrap">
  <div class="contacts_title"><? echo $APPLICATION->GetTitle() ?> </div>

    <h2>Dear customers!</h2>

<h2>We care about you and our employees! All deliveries by couriers is temporarily contactless! We also made delivery convenient under any conditions!</h2>

<p><b>Thank you for being with us!</b></p>

<h2>REGISTRATION AND CONFIRMATION OF THE APPLICATION</h2>

<p>The Client register an application on his own on the website or by phone.</p>

<p>The Seller's representative contacts the Client to confirm the Application, clarify the date, time and place of delivery of the Goods within 2 days from the date of receipt of the Application.</p>

<p>The Seller reserves the right to cancel the Client's Application at the stage of confirming the Application.</p>

<p>If you have any questions about buying a product on our website, refer to the instructions: <a href="/kak-oformit-zakaz/">How to place an order? Step-by-step instruction.</a></p>


<ul class="dost">
  <li data-id="tab1" class="active">Courier delivery</li>
  <li data-id="tab2" >Postal delivery</li>
  <li data-id="tab3" >Self-delivery</li>
  <li data-id="tab4" >Around the world</li>
</ul>

<div id="tab1" class="tabsa active">
  <p>Delivery by courier in Moscow within the Moscow Ring Road (MKAD) is carried out within 1 - 2 working days, excluding the day of dispatch (for goods available for sale). The cost of delivery is calculated by the manager! Delivery is carried out on weekdays from 10 am to 6 pm so you need to indicate the address where it will be easier for the courier to find you at this time. Please be understanding that you have no more than 15 minutes for a fitting.</p>
  <p>Please be understanding that you have no more than 15 minutes for a fitting.</p>
</div>


<div id="tab2" class="tabsa">

  <p>Доставка заказов осуществляется в пределах Российской Федерации курьерской службой EMS, поэтому Вы можете получить заказ прямо у себя дома или на Рабочем месте. Стоимость доставки рассчитывается автоматически при оформлении заказа, Вы можете в режиме реального времени видеть как изменяется стоимость, в зависимости от вводимого Вами адреса. Приблизительный срок доставки Вы также увидите при оформлении заказа.</p>
</div>

<div id="tab3" class="tabsa">

  <p>Вы можете самостоятельно забрать заказ из нашего магазина по адресу г.Москва ул. Дмитровское шоссе , д. 79 стр.1,этаж 2.

  <p>Мы открыты Пн-Пт с 09:00 до 18:00.</p>

  <p>Как проехать на общественном транспорте: От станции метро Селигерская: 10 минут пешком или две остановки в сторону центра, до остановки «Ильменский проезд». Как проехать на машине: Из центра — повернуть налево на Ильменский проезд и припарковаться вдоль него, либо проехать еще 500 метров до развилки с Коровинским шоссе, развернуться в центр и заехать на удобную бесплатную парковку. Заезд находится между домами 79с1 и 81.</p>
</div>

<div id="tab4" class="tabsa">

  <p>Мы осуществляем доставку в любую точку нашей Планеты. Отправка производится по Почте или курьерской службой EMS - наличие выбора службы доставки, а также стоимость и сроки доставки зависят от страны назначения и состава заказа. Вся эта информация будет предложена Вам в процессе оформления заказа и ввода Ваших данных для доставки. Если Вашей страны, региона или города нет в списке или у Вас появляются другие вопросы и пожелания, связанные с доставкой - пожалуйста, напишите нам на почту info@mpozr.ru и мы поможем Вам в течение нескольких часов!</p>
</div>



</div>

<script>
  $('.dost li').click(function(){
    var i = $(this).attr('data-id');
    $('.tabsa').removeClass('active');
    $('.dost li').removeClass('active');
    $(this).addClass('active');
    $('#'+i).addClass('active');
  })
</script>
<link rel="stylesheet" href="/dostavka/style.css">
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>