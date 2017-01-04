<?php
	$db = new myqsli('localhost','root','toor','webdb');

	if($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.');
	}

	$db->set_charset('utf8');
?>
