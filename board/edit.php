<?php
  require_once("../dbconfig.php");
  $no=$_GET['no'];
  $sql = "select * from test_board where no=".$no;
  $row=mysqli_query($link,$sql)->fetch_array(MYSQLI_ASSOC);
  echo print_r($row);
    // 사용자가 사용자의 글을 수정하는건지 사용자 검증 필요함
  // password 검증 넣기!!!!
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>글 읽기</title>
</head>
<body>
  <form action="./update.php" method="POST">
      <h2><th scope="row">글 수정</th><h2>
      <th scope="row">no</th>
      <label><?= $row['no']?></label><br>
      <input type="hidden" name="no" value=<?=$row['no']?>> <!--인증 필요-->
      <th scope="row">title</th>
      <input type="text" name="title" value=<?=$row['title']?>><br>
      <th scope="row">content</th>
      <input type="content" name="content" value=<?=$row['content']?>><br>
      <button type="submit">수정</button>
	</form>
	</article>
</body>
</html>
