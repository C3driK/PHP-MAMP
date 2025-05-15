<?php

/* 
  Write you php code here

   */
$bestSellers = ["bubble-gum", "toffee", "mai", "hoa"]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p>
    <?php
    echo $bestSellers[0];
    echo "<br>";
    echo $bestSellers[1];
    echo "<br>";
    echo $bestSellers[2];
    ?>

</body>

</html>