<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по размерам");
?>
<div class="guide">
  <div class="wrap">
    <h1><?=$APPLICATION->ShowTitle() ?></h1>
  </div>
    <ul class="act">
      <li class="active" data-id="id1">Мужские</li>
      <li data-id="id2">Женские</li>
    </ul>

  <div class="wrap">
    <div class="tabled">

        <div id="id1" class="active">
          <table>
            <thead>
              <th>Российский размер</th>
              <th>Европейский размер</th>
              <th>Обхват шеи, Рубашки</th>
              <th>Плечи</th>
              <th>Полуобхват груди</th>
              <th>Обхват талии</th>
            </thead>
            <tbody>
              <tr>
                <td>44</td>
                <td>XXS</td>
                <td>36</td>
                <td>39-41</td>
                <td>44-46</td>
                <td>70-72</td>
              </tr>
              <tr>
                <td>46</td>
                <td>XS</td>
                <td>36-37</td>
                <td>42-43</td>
                <td>46-48</td>
                <td>72-76</td>
              </tr>
              <tr>
                <td>48</td>
                <td>S</td>
                <td>37-38</td>
                <td>43-45</td>
                <td>48-50</td>
                <td>77-80</td>
              </tr>
              <tr>
                <td>50</td>
                <td>M</td>
                <td>39-40</td>
                <td>45-47</td>
                <td>50-52</td>
                <td>81-84</td>
              </tr>
              <tr>
                <td>52</td>
                <td>L</td>
                <td>41-42</td>
                <td>47-49</td>
                <td>52-54</td>
                <td>85-88</td>
              </tr>
              <tr>
                <td>54</td>
                <td>XL</td>
                <td>43-44</td>
                <td>49-51</td>
                <td>54-56</td>
                <td>89-92</td>
              </tr>
              <tr>
                <td>56</td>
                <td>XXL</td>
                <td>45-46</td>
                <td>51-53</td>
                <td>56-58</td>
                <td>93-95</td>
              </tr>
              <tr>
                <td>58</td>
                <td>XXXL</td>
                <td>47-48</td>
                <td>53-55</td>
                <td>58-60</td>
                <td>96-99</td>
              </tr>
              <tr>
                <td>60</td>
                <td>XXXL</td>
                <td>&nbsp;</td>
                <td>55-57</td>
                <td>60-62</td>
                <td>100-103</td>
              </tr>
              <tr>
                <td>62</td>
                <td>XXXL</td>
                <td>&nbsp;</td>
                <td>57-59</td>
                <td>62-64</td>
                <td>104-107</td>
              </tr>
            </tbody>
          </table>
        </div>


        <div id="id2">
          <table>
            <thead>
              <th>Российский размер</th>
              <th>Европейский размер</th>
              <th>Обхват шеи, Рубашки</th>
              <th>Полуокружность груди</th>
              <th>Обхват талии</th>
              <th>Обхват бедёр</th>
            </thead>
            <tbody>
              <tr>
                <td>38</td>
                <td>XXS</td>
                <td>36</td>
                <td>41-43</td>
                <td>61-63</td>
                <td>80-83</td>
              </tr>
              <tr>
                <td>40</td>
                <td>XS</td>
                <td>36-37</td>
                <td>43-45</td>
                <td>64-67</td>
                <td>83-86</td>
              </tr>
              <tr>
                <td>42</td>
                <td>S</td>
                <td>37-38</td>
                <td>44-47</td>
                <td>68-71</td>
                <td>87-90</td>
              </tr>
              <tr>
                <td>44</td>
                <td>M</td>
                <td>39-40</td>
                <td>47-49</td>
                <td>72-75</td>
                <td>91-94</td>
              </tr>
              <tr>
                <td>46</td>
                <td>L</td>
                <td>41-42</td>
                <td>49-51</td>
                <td>76-79</td>
                <td>95-98</td>
              </tr>
              <tr>
                <td>48</td>
                <td>XL</td>
                <td>43-44</td>
                <td>51-53</td>
                <td>80-83</td>
                <td>99-102</td>
              </tr>
              <tr>
                <td>50</td>
                <td>XXL</td>
                <td>45-46</td>
                <td>53-55</td>
                <td>84-87</td>
                <td>103-105</td>
              </tr>
              <tr>
                <td>52</td>
                <td>XXXL</td>
                <td>47-48</td>
                <td>55-57</td>
                <td>88-91</td>
                <td>106-109</td>
              </tr>
              <tr>
                <td>54</td>
                <td>XXXL</td>
                <td>&nbsp;</td>
                <td>57-59</td>
                <td>92-96</td>
                <td>110-113</td>
              </tr>
            </tbody>
          </table>
        </div>


    </div>
    <div class="attempt">
      При покупке готовой продукции учитывайте индивидуальные особенности вашей фигуры: сутулость, широкую грудь, выпрямленную спину, большой живот, разную высоту плеч, короткую шею и т.д.
    </div>
  </div>

</div>


<script>
  $(".act li").click(function(){
    $(".act li").removeClass('active');
    $(this).addClass('active');
    var id = $(this).attr('data-id');
    $(".tabled div").removeClass('active');
    $('#'+id).addClass('active');



  })
</script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>