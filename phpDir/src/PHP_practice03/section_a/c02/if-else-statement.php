<?php
$inStock = true;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?php
      if ($inStock) {
        echo 'In Stock';
      } else {
        echo 'Sold Out';
      }
      ?></p>
</body>

</html>