login && register && list && index && 글 업데이트 && 글 작성 구현
세션 및 쿠키 진행해야 함


남은 기능: 세션 만료 / 보안 취약 / 채팅 / 현재 접속자 (세션 배포 수에 따랏 해도 될듯)
채팅  현재 접속자
파일 업로드시 해당 정보를 비밀번호와 함께 db에 저장
/* 보안상황*/
// 파일 다운로드(배열에 대한 것과 그것에 대한 보안 생각하기)
//xss , sql , 사용자 인풋값 검증 등
// session사용 함 다만 이것을 탈취 시 동일한 권한으로 웹 페이지를 이용 가능함
// cookie와 다를게 없음 따라서 session과 cookie모두 xss를 잘 막아야함
//


git init
git add README.md
git commit -m "first commit"
git config --global user.email"ket8780@gmail.com
"
git config --global user.email "ket8780@gmail.com"
git config --global user.name "choiseunghyeon"
git commit -m "first coomit"
git remote add origin https://github.com/choiseunghyeon/php_web_application.git
git push -u origin master


php 설계

홈페이지 흐름
회원가입 && 로그인->글쓰기(파일 업로드)&& 게시판 목록 (파일 다운로드)&& 검색 기능
게시판 클릭 -> 수정 삭제(권한 검증) 뒤로가기 && 덧글달기

덧글 기능
session_cookie 에잇는 user_id를 가져와서
comment table에 저장 이 table은 test_board의 no과 연관 되어 있음

USER
로그인시 세션&&쿠키로 사용자 검증

DB
회원가입 db 글쓰기 게시판 db(덧글 필요)

회원가입 세부사항
user_id
user_pw

create table user_info(
user_id varchar(20) not null primary key,
user_pw varchar(20) not null
);

게시판 세부사항
create table test_board(
no int unsigned not null primary key auto_increment,
title varchar(100) not null,
content text not null,
id varchar(20) not null,
password varchar(20) not null
);

댓글 세부사항
create table comment(
board_no int unsigned not null,
c_no int unsigned not null auto_increment,
id varchar(20) not null,
comment varchar(100) not null,
primary key(c_no),
foreign key(board_no) references test_board(no)
);

insert into test_board ( no,title,content,id,password) values (null,"title","테스트","'id","패스워드")
