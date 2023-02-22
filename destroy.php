<?php
  session_start(); //Start a Session

  session_destroy(); //Destroying all Sessions
  setcookie('my_cookie','myvalue',time() - 1000000); //Destroying a Cookie
?>
