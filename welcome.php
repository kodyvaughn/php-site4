<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: login.php");
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
<script>

</script>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<p>Welcome to the homepage.</p>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
