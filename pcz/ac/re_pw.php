<?php
require "../connect.php";
$user_name=$_POST['user_name'];
$pass_word=$_POST['repw'];
$sql=<<<EOF
UPDATE users SET pass_word='$pass_word' WHERE user_name='$user_name' OR user_sname='$user_name'
EOF;
$stmt=$conn->query($sql);
$status_into=array(
"status_bool"=>"TRUE",
"username"=>$user_name,
"password"=>$pass_word
);
session_start();
$_SESSION["login_user"]=false;
$_SESSION["user_name"]=false;
header("Content-Type: application/json; charset=UTF-8");
echo json_encode($status_into);
?>
