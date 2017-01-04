<?php
  echo '1';
  require_once('../dbconfig.php');
  echo '2';
  $sql = 'insert into board ( title, content, date, hit,filename, id, password)
  values("title", "content", "date", 0,"abc", "id", "password")';
?>
