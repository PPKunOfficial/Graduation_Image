<?php
header("Content-Type: application/json; charset=UTF-8");
function into_to_tbl(){
	$conn=$GLOBALS["conn"];
	$user_name=$GLOBALS["user_name"];
	$user_sname=$GLOBALS["user_sname"];
	$pass_word=$GLOBALS["pass_word"];
	$stmt = $conn->query("SELECT user_name FROM users WHERE BINARY user_name=\"$user_name\"");
    foreach ($stmt as $row) {
        $if_had_user=$row['user_name'];
		isset($if_had_user);
    }
    if(isset($if_had_user)==FALSE){
		try{
			if(isset($GLOBALS["call_fs"])){
				$call_fs=$GLOBALS["call_fs"];
				$sql=<<<EOF
INSERT INTO users (user_name,user_sname,pass_word,call_fs)
VALUES ("$user_name","$user_sname","$pass_word","$call_fs")
EOF;
			} else {
				$sql=<<<EOF
INSERT INTO users (user_name,user_sname,pass_word)
VALUES ("$user_name","$user_sname","$pass_word")
EOF;
			}
			$conn->exec($sql);
			$status_into=array(
			"status_bool"=>"TRUE",
			"username"=>$user_name,
			"usersname"=>$user_sname
			);
		} catch(PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	} else {
			$status_into=array(
			"status_bool"=>"FALSE",
			"username"=>$user_name,
			"usersname"=>$user_sname
			);
	}
	echo json_encode($status_into);
}
?>
