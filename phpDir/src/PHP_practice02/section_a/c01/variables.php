<?php

/* 
  Write you php code here

   */
$candy1 = "lolly-pop";
$candy2 = "mai-pop";

$price1 = 4;
$price2 = 5


?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <h1>The Candy Store</h1>
  <h2>Try our Vietnamese candies</h2>
  <?php
  echo  "<p>We have $candy1 and it costs {$price1}€</p>"
  ?>
</body>

</html>