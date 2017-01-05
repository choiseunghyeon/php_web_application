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
// 다음과 같이 셋팅 해야 한글이 잘 저장됨
?>
