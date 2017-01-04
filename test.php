<?php
$filter = ['conv','code','hex','x','`','\'','"'];

foreach ($filter as $_str)
{
		if(strpos(strtolower($_GET['id']),$_str)!==false)
		{
			exit('no hack');
		}
		else {
			echo 'um..';
		}
}
$test = $_GET['id'];
echo $test;

?>
