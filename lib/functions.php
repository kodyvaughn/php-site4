<?php
function echoPost($name) 
{
    if (isset($_POST[$name]))
    echo htmlspecialchars($_POST[$name]);
}

function echoSession($name) 
{
    if (isset($_SESSION[$name]))
    echo htmlspecialchars($_SESSION[$name]);
}
?>
