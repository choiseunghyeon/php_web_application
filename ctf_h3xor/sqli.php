<?php
require_once('./dbconfig.php');
extract($_GET);
$flag = "???????";
include './db.php';
if(isset($_GET['id']) && isset($_GET['pw'])) {
    if(preg_match("/admin| |\t|\'|unoin|select|_|=|like|[*]|\(\)|or|\/|and/i", $_GET['id'])) die("No Hack ~_~");
    else if(preg_match("/admin| |\t|\'|unoin|select|_|=|like|[*]|\(\)|or|\/|and/i", $_GET['pw'])) die("No Hack ~_~");

    $id = $_GET['id'];
    $pw = $_GET['pw'];
    $query = "select * from user_info where user_id=ord(trim('{$id}')) and ord(trim('{$pw}'))";
    echo "<hr><b>".$query."</b><hr><br><br>";
    $result = $mysqli->query($query);
    $result = @mysqli_fetch_array($result);
    if ($result['id'] === 'admin') {
        die($flag);
    } else if(isset($result['id'])) {
        echo "<h1>Hello {$result['id']}</h1>";
    }
}
?>
