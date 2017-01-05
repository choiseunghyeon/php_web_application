<?php
	require_once('dbconfig.php');	// error 발생시 error를 보내고 그대로 종료
					 // include 를 사용할 시 보여줄 수 있는 만큼 보여줌

	$sql = 'select * from test_board';
	$result = mysqli_query($link,$sql); // 객체 전달 print_r을 통해 객체 안의 내용 확인 가능
	//$row = $result->fetch_array(MYSQLI_ASSOC); //  객체로 넘어온 값을 한 행씩 패치해서 $row 배열에 담음
	/* 	fetch_array안의 인자로는 MYSQLI_NUM(숫자로 접근)
	 		MYSQLI_ASSOC(이름으로 접근) MYSQLI_BOTH(둘다 가능)
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판</h3>
		<table border="1"> <!--http://aboooks.tistory.com/59 참고-->
			<caption class="readHide">자유게시판</caption>
				<tr>
					<th scope="col" class="no"><a href="http://zzaps.tistory.com/2">번호</a></th>
					<th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
				</tr>
<?php
				while($row = $result->fetch_array(MYSQLI_ASSOC)){ 	// 배열을 하나씩 row에 전달
?>
				<tr>
					<td><?= $row['no']?></td>
					<td><?= $row['title']?></td>
					<td><?= $row['id']?></td>
				</tr>
<?php
 }
 ?>
		</table>
	</article>
</body>
</html>
