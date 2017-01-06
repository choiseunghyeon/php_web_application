<?php
  require_once("../dbconfig.php");
  $no=$_POST['no'];
  $title=$_POST['title'];
  $content=$_POST['content'];
  echo $no;
  echo $title;
  $sql = "update test_board set title='$title',content='$content' where no='$no'";
  if($row=mysqli_query($link,$sql)){
    	Header("Location:./list.php");
  }
    // 사용자가 사용자의 글을 수정하는건지 사용자 검증 필요함
    // password 검증 넣기!!!!
?>
