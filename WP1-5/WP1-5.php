<?php
  
  $homelessMoney=200 ;
  $vodkaPrice=119 ;
  $cigarett=100 ;
  $plus=$vodkaPrice + $cigarett;
  
  if ($homelessMoney >= $plus) {
    $answer="Zakoupeno" ;
    $zbytek = $homelessMoney - $plus ;
  } elseif ($homelessMoney >= $vodkaPrice) {
    $answer="Vodka Zakoupena" ;
    $zbytek = $homelessMoney - $vodkaPrice ;
  } else {
    $answer="Nedostatek peněz";
    $zbytek = $homelessMoney;
  }
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>Cena vodky: <?=$vodkaPrice?> </br>
<br>Cena cigaret: <?=$cigarett?> </br>
     <br>Peníze bezdomovce před koupí:  <?=$homelessMoney?> </br>       
         <br><?=$answer?></br>
      <br>Bezdomovci po návštěvě večerky zbývá: <?=$zbytek?></br>  
</body>
</html>