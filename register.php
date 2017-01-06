<?php
  require_once('dbconfig.php');

  $user_id = $_POST['user_id'];
  $user_pw = $_POST['user_pw'];
  echo "id  ".$user_id." pw ".$user_pw;
  $sql = 'insert into user_info values ("'.$user_id.'","'.$user_pw.'")';
  if(mysqli_query($link,$sql)===true){
    $msg = 'completed';
  } else {
    $msg = 'tt';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>회원가입</title>
</head>
<body>
  <form action="register.php" method="post">
    <p> 아이디: <input type="text" name="user_id"/></p>
    <p> 비밀번호: <input type="password" name="user_pw"/></p>
    <p> 비밀번호: <button type="submit">완료</button></p>
  </form>
<?php
if($result==='completed'){
?>
  <script>
  alert("<?= $result?>");
  </script>
<?php
}
?>
</body>
</html>
