<?php
  require_once('./dbconfig.php');
  session_start(); // 이때 세션 쿠키를 줌
  $sql= "select * from user_info where user_id='{$_POST['user_id']}' and user_pw='{$_POST['user_pw']}'";
  echo $sql;
  $row=mysqli_query($link,$sql)->fetch_array(MYSQLI_ASSOC);
  if($row['user_id']===$_POST['user_id']){
    $_SESSION['stat']=true; // 해당 세션 쿠키에 대한 값 지정
    $_SESSION['sid']=$row['user_id'];
    $msg = 'log in';
  } else {
    $msg = 'tt';
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>로그인</title>
</head>
<body>
  <form action="login.php" method="post">
    <p> 아이디: <input type="text" name="user_id"/></p>
    <p> 비밀번호: <input type="password" name="user_pw"/></p>
    <p> 비밀번호: <button type="submit">완료</button></p>
  </form>
  <?php
  if($_SESSION['stat']===true){
  ?>
    <script>
    location.replace('/board/list.php');
    </script>
  <?php
  }
  ?>
</body>
</html>
