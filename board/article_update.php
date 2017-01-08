<?php
  require_once('../dbconfig.php');

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

  echo '<pre>';
  if(move_uploaded_file($FILES['userfile']['tmp_name'], $uploadfile)){
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
  } else {
    print "파일 업로드 공격의 가능성이 있습니다.!";
  }

  echo '자세한 디버깅 정보입니다:';
  print_r($FILES);

  print "</pre>";

mysqli_close($link);
//<script> alert('글이 등록되었습니다.')</script> <script> alert('실패 하였습니다.');history.back();</script>
?>
<script>
alert("<?php echo $result?>");
location.replace("<?php echo $redirectURL?>");
</script>
