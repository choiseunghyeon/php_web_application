<?php
$db_host='localhost';
$db_user='root';
$db_passwd='toor';
$db_name='webdb';
$link = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if(mysqli_connect_errno()){
	echo "데이터베이스 연결 실패: " . mysqli_connect_error();
	exit();
}

if(!mysqli_set_charset($link,"utf8")){
	echo "utf8 셋팅 에러";
}
// http://php.net/manual/kr/mysqli.set-charset.php
// php 설정
//http://bstar36.tistory.com/307 db 설정
// 위의 두개를 다 설정해주어야 한글이 잘 저장됨
//php7.0-mysql 모듈을 다운받지 않으면 mysqli 함수 사용 불가
?>
