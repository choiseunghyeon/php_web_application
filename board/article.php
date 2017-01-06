<?php
  require_once("../dbconfig.php");
  $no=$_GET['no'];
  if(preg_match('/abc/i',$no)) exit("no hack"); // GET으로 받는 각각에 값이 입력됨 따라서 받는 값 하나를 어떠한 변수에 저장하고
                                                        // 그 변수를 필터링 하는게 효과적을 보임.
  $sql = "select * from test_board where no=".$no;
  $row=mysqli_query($link,$sql)->fetch_array(MYSQLI_ASSOC);
  echo print_r($row);
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
          <a href="./list.php">목록</a>
					<a href="./edit.php?no=<?= $row['no'];?>">수정</a>
          <a href="./delete.php?no=<?= $row['no'];?>">삭제</a>
			</form>
		</div>
	</article>
</body>
</html>
