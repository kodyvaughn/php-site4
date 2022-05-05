<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
}
if (isset($_SESSION['cookies'])) { /* If there is already a value set */
  /*Do Nothing*/
}
else { /* If there is no value set, ie the user is loading the page for the first time */
  $_SESSION['cookies'] = 0; /* Set to 0 */
}
if (!isset($_POST['choice']))
{
   
}
else if ($_POST['choice'] == 'Buy One')
{
   $_SESSION['cookies'] = $_SESSION['cookies'] + 1;
}
else if ($_POST['choice'] == 'Remove One')
{
   $_SESSION['cookies'] = $_SESSION['cookies'] - 1;
}
else if ($_POST['choice'] == 'Remove All')
{
   $_SESSION['cookies'] = 0;
}

if ($_SESSION['cookies'] <= -1)
{
   $_SESSION['cookies'] = 0;
}
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<h2>Cookies</h2>
<form method='POST'>
<input type='submit' name='choice' value='Buy One'>
<input type='submit' name='choice' value='Remove One'>
<input type='submit' name='choice' value='Remove All'>
</form>
In cart: <?php echoSession('cookies');?>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
