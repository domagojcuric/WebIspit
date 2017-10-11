<?php
$mysqli= new mysqli('localhost','root','','quiz_oops');
mysqli_set_charset($mysqli,'utf8');
if(mysqli_connect_errno()){
	echo "Pogreška<br>";
	echo mysqli_connect_error();
	exit;
}
?>