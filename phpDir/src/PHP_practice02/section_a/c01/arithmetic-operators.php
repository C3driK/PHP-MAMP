<?php

/* 
  Write you php code here

   */
$items = 3;
$cost = 5;
$name = "Mr James";
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>The number of items is <?= $items ?> and the cost of each item is <?= $cost ?>.</p>
  <p>The subtotal is <?= $subtotal ?> and the total is <?= ($subtotal + $tax) ?>.</p>

</body>

</html>