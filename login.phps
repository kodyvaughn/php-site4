<html>
<head>
<?php
require('lib/functions.php');

function checkLogin($user, $pass)
{
    if ($user == 'parkland' && $pass == '12345')
    return True; 
    else
    return False;
}
session_start(); 

$message = '';
if (isset($_POST['choice']))
{
    if ( checkLogin($_POST['username'], $_POST['passwd']) )
    {
    $_SESSION['username'] = $_POST['username'];
    }
    else
    {
    $message = 'Invalid Username or Password';
    }
?>
<title>12 Lab | PHP Site 1</title>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile('lib/header.php');?>
<form method='POST'>
User: <input type='text' name='username' value='<?php echoPost("username"); ?>'> <br>
Password: <input type='password' name='passwd' value='<?php echoPost("passwd"); ?>'> <br>
<input type='submit' name='choice' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
</body>
</html>
