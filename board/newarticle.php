<?php
  require_once('../dbconfig.php');
  require_once('./upload.php'); // file upload

  $redirectURL = 'list.php';
  $uploaddir = '/home/choi/php_web_application/board/uploads'; //file uploads
  $uploadfile = $uploaddir . basename($_FILES['userfile']['nanme']); //file uploads

  $id=$_POST['id'];
  $password=$_POST['password'];
  $title=$_POST['title'];
  $content=$_POST['content'];

  $sql = 'insert into test_board ( no,title,content,id,password) values (null,"'.$title.'","'.$content.'","'.$id.'","'.$password.'")';

  if(mysqli_query($link,$sql)===true){
    $result = 'good';
  } else {
    $result = 'tt';
  }

mysqli_close($link);
//<script> alert('글이 등록되었습니다.')</script> <script> alert('실패 하였습니다.');history.back();</script>
?>
<script>
alert("<?php echo $result?>");
location.replace("<?php echo $redirectURL?>");
</script>
