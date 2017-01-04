<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 글쓰기 | Kurien's Library</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글쓰기</h3>
		<div id="boardWrite">
			<form action="./test_article_update.php" method="post">
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
            <tr>
              <th scope="row"><label for="title">타이틀</label></th>
              <td class="id"><input type="text" name="title" id="title"></td>
            </tr>
						<tr>
							<th scope="row"><label for="id">아이디</label></th>
							<td class="id"><input type="text" name="id" id="id"></td>
						</tr>
						<tr>
							<th scope="row"><label for="password">비밀번호</label></th>
							<td class="password"><input type="text" name="password" id="password"></td>
						</tr>
						<tr>
              <th scope="row"><label for="content">내용</label></th>
							<td class="content"><textarea name="content" id="content"></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">작성</button>
					<a href="./board/index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
