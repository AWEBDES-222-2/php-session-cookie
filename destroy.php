<?php
  session_start(); //Make sure to place this before any other code

  session_destroy(); //Destroying all Sessions
  setcookie('my_cookie','myvalue',time() - 1000000); //Destroying a Cookie
?>
