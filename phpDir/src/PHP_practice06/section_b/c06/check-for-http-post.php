<?php include 'includes/header.php'; ?>


<?php
/* Write PHP Code here  
Overall idea here is to check if a form has been submitted


Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST, 
and a message should be displayed like this:
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form



*/


?>
<!DOCTYPE html>
<html>

<head>
  <title>PHP Form Handling</title>
</head>

<body>
  <form action="" method="post">
    Enter Search <BR>
    <input type="text" name="search" value="">
    <button type="submit">Submit</button>
  </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $search = $_POST['search'];
  echo "You searched for $search";
};
?>


<?php include 'includes/footer.php'; ?>