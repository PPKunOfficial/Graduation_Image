<?php
session_start();
if($_SESSION["login_user"]==false){
	die();
}
require "../pcz/connect.php";
$num_rec_per_page=5;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM imgs LIMIT $start_from, $num_rec_per_page";
$stmt=$conn->query($sql);
$num_array=array();
$i=1;
while ($row = $stmt->fetch()){
	$img_name=$row["img_name"];
	$img_url=$row["img_url"];
	array_push($num_array,array("name" => $img_name,"url" => $img_url));
	$i++;
}
$sql=<<<EOF
SELECT * FROM imgs
EOF;
$stmt=$conn->query($sql);
$stmt_all=$stmt->fetchALL();
$colcount=count($stmt_all);
$total_pages=ceil($colcount / $num_rec_per_page);
$data_array=array("data" => $num_array,"pages" => $total_pages);
header("Content-Type: application/json; charset=UTF-8");
print_r (json_encode($data_array));
?>
