<?php
  require_once('../dbconfig.php');
  session_start();

  $content = $_POST['content'];
  $no = $_POST['no'];
  $user_id=$_SESSION['sid'];
  $back = $_SERVER['HTTP_REFERER']; // 이전 페이지의 url 주소를 가져옴;
  $sql = 'insert into comment values ("'.$no.'",null,"'.$user_id.'","'.$content.'")';
  if(mysqli_query($link,$sql)===true){
    Header("Location:$back");
  } else {
    $msg = 'tt';
  }
?>
