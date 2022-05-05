<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['passwd']);
session_destroy();
header('Refresh:5; url=login.php', true, 303);
?>
<h2>Goodbye!!!</h2>