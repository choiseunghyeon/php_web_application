<?php
  require_once("../dbconfig.php");
  $no=$_GET['no'];
  if(preg_match('/abc/i',$no)) exit("no hack"); // GET으로 받는 각각에 값이 입력됨 따라서 받는 값 하나를 어떠한 변수에 저장하고
                                                        // 그 변수를 필터링 하는게 효과적을 보임.
  $sql = "select * from test_board where no=".$no;
  $c_sql="select * from comment where board_no=$no";
  $row=mysqli_query($link,$sql)->fetch_array(MYSQLI_ASSOC);
  $c_result=mysqli_query($link,$c_sql);
  //댓글달기
  //댓글 다는 사람의 이름 내용을 test_board에 잇는 no와 엮어서 db 구성
  // password 검증 넣기!!!!
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>글 읽기</title>
</head>
<body>
    <table border="1"> <!--http://nanati.me/html_css_table_design/4-->
      <tr>
          <td scope="cols">번호</td>
          <td scope="cols"><?= $row['no'];?></td>
      </tr>
      <tr>
          <th scope="row">title</th>
          <td><?= $row['title'];?></td>
      </tr>
      <tr>
          <th scope="row">content</th>
          <td><?= $row['content'];?></td>
      </tr>
      <tr>
          <th scope="row">id</th>
          <td><?= $row['id'];?></td>
      </tr>
    </table>
    <table border="1">
<?php
  while($c_row=$c_result->fetch_array(MYSQLI_ASSOC)){
?>
      <tr>
          <td scope="cols">댓글 번호</td>
          <td scope="cols"><?= $c_row['c_no'];?></td>
      </tr>
      <tr>
          <th scope="row">id</th>
          <td><?= $c_row['id'];?></td>
      </tr>
      <tr>
          <th scope="row">내용</th>
          <td><?= $c_row['comment'];?></td>
      </tr>
<?php
  }
?>
    </table>
    <form action="./comment.php" method="POST">
      <input type="hidden" name="no" value="<?= $row['no'];?>"><br> <!--//사용지가 바꿀 수 있음-->
      <input type="text" name="content" value="댓글 내용">
      <input type="submit" value="submit"><br>
    </form>
          <a href="./list.php">목록</a>
					<a href="./edit.php?no=<?= $row['no'];?>">수정</a>
          <a href="./delete.php?no=<?= $row['no'];?>">삭제</a>

		</div>
	</article>
</body>
</html>
