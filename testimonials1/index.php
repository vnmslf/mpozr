<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");

echo '
<div class="testi_bgs bgg"><div>'.$APPLICATION->GetTitle().'</div></div>';
echo '<div class="testi conti wrap">';
?>


<?//$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>

<h1>Отзывы</h1>


<ul>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
  <li>
    <img src="/local/templates/main/img/testimonials/otziv.jpg" alt="">
  </li>
</ul>

<?
    echo '</div>';
   require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
