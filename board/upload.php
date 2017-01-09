<?php
// file같은 경우 www-data이기 때문에 폴더에 권한 문제를 해결해주어야 한다 ex chmod 777
$uploaddir = dirname(__FILE__).'/uploads/'; // 현재 파일의 절대경로
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (!file_exists($uploadfile)) { // 똑같은 파일이 없으면 들어감
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile); //
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}

echo '자세한 디버깅 정보입니다:';
print_r($_FILES);

print "</pre>";

?>
