<?php
$lsql="mysql";
$servername="localhost";
$dbname="byz";
$username="byz_php";
$password="byz_php_pw";
try{
	$conn=new PDO("$lsql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
