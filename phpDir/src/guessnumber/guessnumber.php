<?php
/*
* Guess the Number Game
* This is a simple PHP script that generates a random number between 1 and 100.
* The user has to guess the number within a limited number of attempts.
* The script provides feedback on whether the guess is too high, too low, or correct.
* It also displays the number of attempts left and the final result.
* TODO: You can modify the range, add hints, or change visuals
*/

$target = rand(1, 10);
$attempts = isset($_GET['attempts']) ? (int)$_GET['attempts'] : 5;
$guess = isset($_GET['guess']) ? (int)$_GET['guess'] : null;
$message = "";
$color = "#fff";

if ($guess !== null) {
  $attempts--;
  if ($guess === $target) {
    $message = "You won! The number was $target!";
    $color = "#00ff00"; // Green
  } elseif ($guess < $target) {
    $message = "Too low! Try again.";
    $color = "#ff0000"; // Red
  } else {
    $message = "Too high! Try again.";
    $color = "#ff0000"; // Red
  }
  if ($attempts <= 0) {
    $message = "Game over! The number was $target.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Guess the Number</title>
  <style>
    body {
      text-align: center;
      background: #f0f0f0;
    }

    .feedback {
      padding: 20px;
      background: <?php echo $color;
                  ?>;
    }
  </style>
</head>

<body>
  <h1>Guess the Number (1-10)</h1>
  <p>Attempts left: <?php echo $attempts; ?></p>
  <form method="GET">
    <input type="number" name="guess" min="1" max="10">
    <input type="hidden" name="attempts" value="<?php echo $attempts; ?>">
    <input type="submit" value="Guess">
  </form>
  <div class="feedback"><?php echo $message; ?></div>
</body>

</html>