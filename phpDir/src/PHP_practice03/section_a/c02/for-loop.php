<?php
$price = 1.99;
$packs = 10;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    for ($x = 1; $x <= 10; $x++) {
      $total = $price * $x;
      echo "The cost of $x packs is: $total<br>";
    }
    ?>
  </p>
</body>

</html>