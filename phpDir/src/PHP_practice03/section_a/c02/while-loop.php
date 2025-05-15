<?php
$price = 1.99;
$packs = 5;
$counter = 1;
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    while ($counter <= $packs) {
      $total = $counter * $price;
      $counter++;
    }
    echo "The price of" . " " . $packs .  
    " packs" . " " . "is " . $total;
    ?>

  </p>
</body>

</html>