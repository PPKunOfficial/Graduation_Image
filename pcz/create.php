<?php
header("Content-Type: text/html; charset=UTF-8");
function create_tbl(){
	$conn=$GLOBALS["conn"];
	try{
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql=<<<EOF
CREATE TABLE users(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
user_name VARCHAR(3) NOT NULL,
user_sname VARCHAR(50) NOT NULL,
pass_word VARCHAR(50) NOT NULL,
call_fs VARCHAR(100),
reg_data TIMESTAMP
)
EOF;
		$conn->exec($sql);
		echo "Creat TBL Ok!";
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}
?>
