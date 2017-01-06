<?php
  require_once('./dbconfig.php');


  $sql= "select * from user_info where user_id='{$_GET['user_id']}' and user_pw='{$_GET['user_pw']}'";
  echo "<hr> query: $sql</hr><br>";
  $row=mysqli_query($link,$sql)->fetch_array(MYSQLI_ASSOC);
  echo print_r($row)."<br>";
  if($row['user_id']==='admin'){
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
  <form action="test_login.php" method="get">
    <p> 아이디: <input type="text" name="user_id"/></p>
    <p> 비밀번호: <input type="password" name="user_pw"/></p>
    <p> 비밀번호: <button type="submit">완료</button></p>
  </form>
  <?php
  if($msg==='log in'){
  ?>
    <script>
    alert("<?= $msg?>");
    </script>
  <?php
  }
  ?>
</body>
</html>
