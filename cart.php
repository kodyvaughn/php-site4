<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: login.php");
if (!isset($_POST['choice']))
{

}
else if ($_POST['choice'] == 'Make Purchase')
{
    $_SESSION['chips'] = 0;
    $_SESSION['cookies'] = 0;
    $_SESSION['soda'] = 0;
    $_SESSION['water'] = 0;
}
else if ($_POST['choice'] == 'Remove Purchase')
{
    $_SESSION['chips'] = 0;
    $_SESSION['cookies'] = 0;
    $_SESSION['soda'] = 0;
    $_SESSION['water'] = 0;
}
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<h2>Check Out</h2>
Listing of items: <br>
Chips: <?php echoSession("chips") ?> <br>
Cookies: <?php echoSession("cookies") ?> <br>
Soda: <?php echoSession("soda") ?> <br>
Water: <?php echoSession("water") ?> <br>

<form method='POST'>
<input type='submit' name='choice' value='Make Purchase'>
<input type='submit' name='choice' value='Remove Purchase'>
</form>
<?php 
if (!isset($_POST['choice'])) { }
else if ($_POST['choice'] == 'Make Purchase') { echo 'Payment Successful!';}
?>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
