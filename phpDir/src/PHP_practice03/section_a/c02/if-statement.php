<?php
$name = "Femi"
?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<p><?php
    if ($name != "") {
      echo 'Hello' . " " . $name;
    }
    ?></p>
</body>

</html>