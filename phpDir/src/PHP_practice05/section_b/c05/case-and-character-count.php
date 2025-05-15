<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
    lowerCase : <?= strtolower($text) ?><br>
    upperCase: <?= strtoupper($text) ?><br>
    Number of Characters: <?= strlen($text) ?><br>
    Number of words: <?= str_word_count($text) ?>

</p>

<?php include 'includes/footer.php'; ?>