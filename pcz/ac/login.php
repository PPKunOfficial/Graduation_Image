<?php
require "../connect.php";
$user_name=$_POST['user_name'];
$pass_word=$_POST['pass_word'];
$jsunixtime=(int)$_POST['time'] + 60*60*24*7;
$sql=<<<EOF
SELECT * FROM users WHERE user_name="$user_name" AND pass_word="$pass_word" OR user_sname="$user_name" AND pass_word="$pass_word";
EOF;
$stmt=$conn->query($sql);
foreach ($stmt as $row) {
	$if_had_user=$row['user_sname'];
}
if(isset($if_had_user)){
	session_start();
	$_SESSION["login_user"]=true;
	$_SESSION["user_name"]=$user_name;
	$status_into=array(
	"status_bool"=>"TRUE",
	"username"=>$if_had_user,
	"password"=>$pass_word,
	"key"=>substr(md5("p1p3k8e7y" . (string)$jsunixtime), 0, 5) . "-" . (string)$jsunixtime
	);
} else {
	$status_into=array(
	"status_bool"=>"FALSE",
	"password"=>$pass_word,
	"username"=>$user_name
	);
}

header("Content-Type: application/json; charset=UTF-8");
echo json_encode($status_into);
?>
