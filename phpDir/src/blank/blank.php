
<?php
//set cookie
setcookie("user", "john doe", time() + 3600, "/"); // 1 hour
setcookie("age", "25", time() + 3600, "/"); // 1 hour

// read cookie

if (isset($_COOKIE["user"])) {
    echo "User is: " . $_COOKIE["user"] . "
";
} else {
    echo "User is not set
";
}
?>

<?php
session_start();
$_SESSION['name'] = 'John Doe';


?>