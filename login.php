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
    header('Location: welcome.php');
    $_SESSION['username'] = $_POST['username'];
    }
    else
    {
    $message = 'Invalid Username or Password';
    }
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>12 Lab | PHP Site 1</title>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form method='POST'>
<h1>Sign In</h1>
Username: <input type='text' name='username'><br>
Password: <input type='password' name='passwd'><br>
<input type='submit' name='choice' value='Log In'>
</form>
<p>The username is <b>parkland</b> and the password is <b>12345</b></p>
<h4><?php echo $message; ?></h4>
</body>
</html>
