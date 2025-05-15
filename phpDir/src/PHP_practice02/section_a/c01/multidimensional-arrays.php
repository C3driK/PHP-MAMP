<?php

/* 
  Write you php code here

   */
$offers = [
  ["name" => "mai", "price" => 5, "stock-level" => "low"],
  ["name" => "bubble-gum", "price" => 20, "stock-level" => "high"],
  ["name" => "toffee", "price" => 10, "stock-level" => "finished"],

]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>

  <p> <?= $offers[0]["name"] ?> and the price is <?= $offers[0]["price"] ?>.

  <p> <?= $offers[1]["name"] ?> and the price is <?= $offers[1]["price"] ?>.

  <p><?= $offers[2]["name"] ?> and the price is <?= $offers[2]["price"] ?>.

</body>

</html>