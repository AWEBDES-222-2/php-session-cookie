<?php
  session_start();

  $_SESSION['session_name'] = "myvalue"; //Setting a Session
  setcookie('cookie_name','muyvalue',time() + 1000000); //Setting a Cookie 
?>
