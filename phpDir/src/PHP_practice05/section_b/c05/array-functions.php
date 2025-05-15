<?php
$greetings = ["Hi", "Howdy", "Hello", "Cia", "Moi", "Namaste", "Welcome"];
$greetingKey = array_rand($greetings);
$greeting = $greetings[$greetingKey];
$items = ["books", "pencils", "bags", "bagels"];
$itemsKey = array_rand($items);
$item = $items[$itemsKey];
$topItems = count($items);
$customer = [
    "firstname" => "femi",
    "lastname" => "adeniiei",
    "email" => "oleooem@ndjd"
]
?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<p> <?= $greeting  ?></p>
<p>The best seller today is <?= $item ?></p>
<p>We have <?= $topItems ?> top Items and they are <?= implode(", ", $items) ?></p>
<p><?= isset($customer['firstname']) ? $greeting . ' ' . $customer['firstname'] : '' ?></p>

<?php include 'includes/footer.php'; ?>