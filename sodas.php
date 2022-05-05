<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
}
if (isset($_SESSION['soda'])) { /* If there is already a value set */
  /*Do Nothing*/
}
else { /* If there is no value set, ie the user is loading the page for the first time */
  $_SESSION['soda'] = 0; /* Set to 0 */
}
if (!isset($_POST['choice']))
{
   
}
else if ($_POST['choice'] == 'Buy One')
{
   $_SESSION['soda'] = $_SESSION['soda'] + 1;
}
else if ($_POST['choice'] == 'Remove One')
{
   $_SESSION['soda'] = $_SESSION['soda'] - 1;
}
else if ($_POST['choice'] == 'Remove All')
{
   $_SESSION['soda'] = 0;
}

if ($_SESSION['soda'] <= -1)
{
   $_SESSION['soda'] = 0;
}
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<h2>Can of Soda</h2>
<form method='POST'>
<input type='submit' name='choice' value='Buy One'>
<input type='submit' name='choice' value='Remove One'>
<input type='submit' name='choice' value='Remove All'>
</form>
In cart: <?php echoSession('soda');?>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
