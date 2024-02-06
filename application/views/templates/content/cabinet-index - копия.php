<?php 
$my_flag = true ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Личный кабинет пользователя</title>




<script type="text/javascript" src="js/jq.js"></script>
<script src="js/jquery-ui.js"></script>
<style type="text/css">
body { font-size:12px; font-family:Arial, Helvetica, sans-serif;}

.red { color:#A00}

#example {
  width:120px;
}

.label { width:220px; float:left}
.label  i { color:#999999; font-size:11px;}
input { cursor:pointer}
select{ width:230px;}
textarea {width:220px; height:40px;}
#sms { cursor:pointer}

.tarifff{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7;  display:none; z-index:5; position:absolute }

.todrweb{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7;  display:none; z-index:5; position:absolute }
.tokaspersky{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7;  display:none; z-index:5; position:absolute }

.details{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7; background-image:url(images/connection-bg.jpg); background-repeat:no-repeat;  z-index:5; position:absolute ;display:none;}

.details2{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7; background-image:url(images/connection-bg.jpg); background-repeat:no-repeat;  z-index:5; position:absolute ;display:none;}

.details3{height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7; background-image:url(images/connection-bg.jpg); background-repeat:no-repeat;  z-index:5; position:absolute ;display:none;}

.choosetariff {height:520px; width:560px; padding:10px 10px; background-color:#F8F1E7; background-image:url(images/connection-bg.jpg); background-repeat:no-repeat;  z-index:5; position:absolute ;display:none;}

.users { margin-top:15px}
.usersimg { width:165px; height:181px; background-image:url(../images/cabinet-user.jpg); background-repeat:no-repeat; float:left}
.usersinfo{height:175px;}
.usersinfo table {background-color:#e6e1d9; width:395px; margin-top:3px; font-size:16px }
.usersinfo table td{border-bottom:1px solid  #c5c2be ; height:29px }
.gray-info { padding-left:20px; font-size:14px; color:#807e7d; width:45%}
.red-info { color:#A00}
.px15 { height:10px;}

.backtocabinet{font-family: Arial, Helvetica, sans-serif; font-size:15px; color:#A00;  text-transform:uppercase; cursor:pointer  }

.uslugi { width:560px; overflow:hidden; margin-top:15px; background-image:url(../images/cabinet-uslugi.jpg); background-repeat:no-repeat; background-position:left center}

.uslugi-sms input { margin-left:10px; width:370px}
.uslugi-info input { margin-left:13px; width:370px}
.uslugi-tariff input { margin-left:15px; width:370px}

.uslugi-sms, .uslugi-tariff, .uslugi-info { margin-left:135px; height:35px;}


.antivirus { width:560px; overflow:hidden; margin-top:5px; background-image:url(../images/cabinet-security.jpg); background-repeat:no-repeat; background-position:left center; height:165px; background-color:#f8f1e7;}

.drweb, .kaspersky { margin-left:175px; height:35px; margin-top:35px;}
.drweb input, .kaspersky input{width:370px}






</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
<div  class="tarifff" id="clickme" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="http://192.168.0.250/net/sms/sms.php" frameborder="0" width="100%" height="100%"></iframe>
</div>

<div  class="details"  id="back_det1" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="https://192.168.0.250/bill/" frameborder="0" width="100%" height="100%"></iframe>

</div>


<div  class="details2"  id="back_det2" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="https://192.168.0.41/bill/" frameborder="0" width="100%" height="100%"></iframe>

</div>



<div  class="details3"  id="back_det3" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="https://t4d.ru/bill/" frameborder="0" width="100%" height="100%"></iframe>

</div>


<div  class="choosetariff"  id="back_det" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="http://192.168.0.250/net/tarif/index.php" frameborder="0" width="100%" height="100%"></iframe>

</div>


<div  class="todrweb"  id="back_drweb" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="https://192.168.0.250/net/anti/drweb.php" frameborder="0" width="100%" height="100%"></iframe>

</div>

<div  class="tokaspersky"  id="back_kaspersky" ><img src="images/backto.jpg"><span class="backtocabinet"> Вернуться в личный кабинет</span>
<hr>
<iframe src="https://192.168.0.250/net/anti/avp.php" frameborder="0" width="100%" height="100%"></iframe>

</div>



<div  style="height:505px; width:560px; padding:10px 10px; background-color:#F8F1E7;" ><span class="red" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; text-transform:uppercase">Личный кабинет</span><span style="font-family: Arial, Helvetica, sans-serif; font-size:16px; color:#A00;  text-transform:uppercase; font-weight:bold; ">:</span>
<hr>



<?php  /* Соединение, выбор БД */ 

$link = mysql_connect("10.10.100.197", "webuser", "") 
or die("Не соединилось!!!"); 
//print "Соединение успешно"; 
mysql_select_db("sklad") or die("Не найдена БД"); 
/* Выполнение SQL запроса */ 


$ip = $_SERVER["REMOTE_ADDR"]; 

$query = "SELECT ip_ukr , ip_ukr , fio , deneg , id_client, utm, utm5 , dolg , in_mb , tarif from user use INDEX (ip_ukr) where ip_ukr = '".$ip."' ";

$result = mysql_query($query) or die("Запрос ошибочный"); 



while ($line = mysql_fetch_array($result, MYSQL_NUM)) { 

if (strtoupper($line[1])==strtoupper($ip)) { 

?>



<div class="users">
  <div class="usersimg"></div>
	<div class="usersinfo">
    <div class="usersinfo2">
    	<table cellpadding="0" cellspacing="11" border="0"  >
        	<tr>
            	<td class="gray-info">                
                Пользователь:</td>
                <td>
<!-- Выводим пользователя-->
                <?   printf($line[2]) ; ?> 
            
                </td>
            </tr>
            <tr>
            	<td class="gray-info">IP адрес: </td>
                <td><span style="color:#807e7d">
                
<? printf($line[1]) ; ?> 
              
                
                </span></td>
            </tr>
            <tr>
            	<td class="gray-info">Текущий тариф:</td>
                <td> <? printf($line[9]) ; ?> </td>
            </tr>
            <tr>
            	<td class="gray-info">Ваш баланс: </td>
                <td class="red-info">
                
<? printf("%.2fp", $line[3]) ; ?>

<?
if ($line[7]>0) {  
print "| Кредит: ";
printf("%.2fp", $line[7]) ;

} 




?>
                
                </td>
            </tr>
         </table>
    </div>
    </div>
</div>
<div class="px15"></div>
<hr>

<div class="uslugi">
	<div class="uslugi-sms"><img src="images/cabinet-sms.jpg" align="left" ><input name=""  id="sms" type="button" value="СМС-оповещение" /></div>
    <div class="uslugi-tariff"><img src="images/cabinet-tariff.jpg" align="left" ><input name=""   id="change" type="button" value="Сменить тарифный план" /></div>
   
   <?
   
   if ($line[6]>0) {
print '    <div class="uslugi-info"><img src="images/cabinet-properies.jpg" align="left" ><input name=""  id="todetails"  type="button"  value="Обещанный платеж / Блокировка / Отчеты "/></div>
';
}

if ($line[5]>0) {
print '    <div class="uslugi-info"><img src="images/cabinet-properies.jpg" align="left" ><input name=""  id="todetails2"  type="button"  value="Обещанный платеж / Блокировка / Отчеты "/></div>
';
}


$my_flag = false ;



} 

} 

/* Освобождение памяти, занятой результатом запроса */ 
mysql_free_result($result); 
/* Закрытие соединения */ 
mysql_close($link); 


if ($my_flag) {
	
	print '    <div class="uslugi-info"><img src="images/cabinet-properies.jpg" align="left" ><input name=""  id="todetails3"  type="button"  value="Обещанный платеж / Блокировка / Отчеты "/></div>
';
	
}


   
   ?>
   

    
</div>


<div class="antivirus">
<div class="drweb"><input name=""  id="drweb" type="button" value="Купить Антивирус - DrWeb " /></div>
<div class="kaspersky"><input name=""  id="kaspersky" type="button" value="Купить Антивирус Касперского" /></div>

</div>


    

  <script>
$('#clickme').click(function() {
  $('.tarifff').hide("slide", {direction: "right"},300, function() {

  });
});


$('#todetails').click(function() {
  $('.details').show("slide", {direction: "right"},300, function() {
  });
});

$('#todetails2').click(function() {
  $('.details2').show("slide", {direction: "right"},300, function() {
  });
});

$('#todetails3').click(function() {
  $('.details3').show("slide", {direction: "right"},300, function() {
  });
});


$('#change').click(function() {
  $('.choosetariff').show("slide", {direction: "right"},300, function() {
  });
});


$('#drweb').click(function() {
  $('.todrweb').show("slide", {direction: "right"},300, function() {
  });
});


$('#kaspersky').click(function() {
  $('.tokaspersky').show("slide", {direction: "right"},300, function() {
  });
});


$('#back_det').click(function() {
  $('.choosetariff').hide("slide", {direction: "right"},300, function() {

  });
});


$('#back_det1').click(function() {
  $('.details').hide("slide", {direction: "right"},300, function() {

  });
});

$('#back_det2').click(function() {
  $('.details2').hide("slide", {direction: "right"},300, function() {

  });
});

$('#back_det3').click(function() {
  $('.details3').hide("slide", {direction: "right"},300, function() {

  });
});

$('#back_drweb').click(function() {
  $('.todrweb').hide("slide", {direction: "right"},300, function() {

  });
});


$('#back_kaspersky').click(function() {
  $('.tokaspersky').hide("slide", {direction: "right"},300, function() {

  });
});




$('#sms').click(function() {

  $('.tarifff').show("slide", {direction: "right"},500, function() {
	  


    // Animation complete.
  });
});



</script>

</body>
</html>