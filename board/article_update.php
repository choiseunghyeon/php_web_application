<?php
  require_once('../dbconfig.php');

  $id=$_POST['id'];
  $password=$_POST['password'];
  $title=$_POST['title'];
  $content=$_POST['content'];

  $date=date('Ymd');
  $sql = 'insert into board (no, title, content, date, hit,filename, id, password)
  values(null, "' . $title . '", "' . $content . '", "' . $date . '", 0,abc, "' . $id . '", password("' . $password . '"))';

  $result = $db->query($sql);
  if($result) {
    $msg = "정상적으로 글이 등록되었습니다.";
    $no = $db->insert_id;
    $replaceURL = './view.php?no='.$no;
  } else {
      $msg = "글을 등록하지 못했습니다.";
  ?>
    <script>
      alert("<?php echo $msg?>");
      history.back();
    </script>
<?php
  }
?>
<script>
  alert("<?php echo $msg?>");
  location.replace("<?php echo $replaceURL?>");
</script>
