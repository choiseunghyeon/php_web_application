
Warning: extract() expects parameter 1 to be array, null given in /host/home3/chaneyoon/html/sqli2.php on line 4
<?php
extract($_GET);
extract($_POST);
extract($_SESSION);
$flag = "???????";
include './db2.php';
if(isset($_GET['id']) && isset($_GET['pw'])) {
    if(preg_match("/admin| |\t|\'|unoin|select|_|=|like|[*]|\(\)|or|\/|and|limit/i", $_GET['id'])) die("No Hack ~_~");
    else if(preg_match("/admin| |\t|\'|unoin|select|_|=|like|ascii|\(\)|or|\/|and|limit|0/i", $_GET['pw'])) die("No Hack ~_~");

    $id = $_GET['id'];
    $pw = $_GET['pw'];
    $query = "select * from login2 where id=ord(trim('{$id}')) and ord(trim('{$pw}'))";
    echo "<hr><b>".$query."</b><hr><br><br>";
    $result = $mysqli->query($query);
    $result = @mysqli_fetch_array($result);
    if ($result['id'] === 'admin') {
        die($flag);
    } else if(isset($result['id'])) {
        echo "<h1>Hello {$result['id']}</h1>";
    }
}

highlight_file(__FILE__);
//made by ch4n3
?>
