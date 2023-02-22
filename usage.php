<?php 
  session_start(); //Make sure to place this before any other code

  echo $_SESSION['session_name']; //Outputting a Session
  echo $_COOKIE['cookie_name']; //Outputting a Cookie
?>
