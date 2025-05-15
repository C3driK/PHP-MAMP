<?php
$inStock = true;
$message = $inStock ? "In Stock" : "Sold Out"
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?php
      echo $message;
      ?></p>
</body>

</html>