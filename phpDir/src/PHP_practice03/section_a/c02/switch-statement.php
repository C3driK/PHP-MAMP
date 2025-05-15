<?php
$day = "Friday"
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p><?php
      switch ($day) {
        case "Monday":
          echo "Yay, you get 20% off chocolates today!";
          break;
        case "Tuesday":
          echo "Yay, you get 20% off mints today!";
          break;
        default:
          echo "Buy 3 packs, get one free!";
      }
      ?></p>
</body>

</html>