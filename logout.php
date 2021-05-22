<?php
session_start();
if(session_destroy()) //Destroying ALl sessions
{
    header("Location: login.html");//Redirecting to Home Page
}
?>