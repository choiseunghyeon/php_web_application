<?php
  session_start();
  session_cache_expire(60);
  echo session_cache_expire();
  $_SESSION['sid']='abc';
  echo print_r($_SESSION);
  echo session_test;
?>
