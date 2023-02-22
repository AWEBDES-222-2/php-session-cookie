<?php
  session_start(); //Make sure to place this before any other code

  $_SESSION['session_name'] = "myvalue"; //Setting a Session
  setcookie('cookie_name','myvalue',time() + 1000000); //Setting a Cookie 
?>
