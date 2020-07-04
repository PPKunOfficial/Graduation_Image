<?php
header("Content-Type: text/html; charset=UTF-8");
require "../connect.php";
$user_name=$_POST["user_name"];
$pass_word=$_POST["pass_word"];
$user_sname=$_POST["user_sname"];
if(isset($_POST["call_fs"])){
	$call_fs=$_POST["call_fs"];
}
require "../reg_into_user.php";
into_to_tbl();
?>
