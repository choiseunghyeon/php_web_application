<?php
$string = urldecode($_GET['foo']);
if ($string == 'admin') die('out1');
else $string = 'admin';
if ($string != 'admin') die('out2');
else $string = urldecode($_GET['foo']);
if ($_GET['bar']) $string = $string.'/'.substr($_GET['bar'], 0, 31);
$hash = '0e747318923710937801923789017319'; // hashing twice
if ($_GET['foo']) $account = explode('/', $string);
echo $string.'<br>';
if (isset($account) && strlen($account[1]) != 32) die('out4');
if ((!$_GET['bar'] || !isset($_GET['bar'])) && $_GET['foo']) die('out5');
echo $account[1];
if (md5($account[1]) == $hash) echo 'good job';
show_source(__FILE__);

/*

1(admin/0e747318923710937801923789017319)

admin/0e747318923710937801923789017319/1

admin
0e747318923710937801923789017319

*/
?>
