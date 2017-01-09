<?php
  session_start();
  echo session_cache_expire();
  $_SESSION['name']='naming';
  echo print_r($_SESSION);
  echo session_test2;
?>
