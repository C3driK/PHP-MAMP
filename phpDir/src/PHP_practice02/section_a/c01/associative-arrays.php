<?php

/* 
  Write you php code here

   */
$nutrition = ['fat' => 50, 'sugar' => 20, 'salt' => 5]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>This Candy has a salt content of <?php
    echo $nutrition['salt'];
    ?> and a sugar content of <?php
    echo $nutrition['sugar'];
    ?> and a fat content of <?php
    echo $nutrition['fat'];
    ?>.

</body>

</html>