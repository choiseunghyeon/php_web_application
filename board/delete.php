<?php
  require_once("../dbconfig.php");

  $no = $_GET['no'];
  $sql = "delete from test_board where no=".$no;
  if(mysqli_query($link,$sql)===true){ //no의 값이 틀려도 삭제되엇다고 뜸 효과적인 인증이 필요함.
  // 사용자가 사용자의 글을 삭제한건지 사용자 검증 필요함 
?>

<script>
alert("삭제되었습니다.");
</script>

<?php } ?>
