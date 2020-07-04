<?php
session_start();
if($_SESSION["login_user"]==false){
	die();
}
require "../pcz/connect.php";
$num_rec_per_page=20;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM imgs LIMIT $start_from, $num_rec_per_page";
$stmt=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<?php require "../pcz/header.php"; ?>
<?php if($_SESSION["login_user"]==true){require "../pcz/body-drawer.php";} ?>
<div class="mdui-container">
	<div class="mdui-row">
			<ul id="lay_flow_load">
				<br>
		<?php
		if($_SESSION["login_user"]==true){
			while ($row = $stmt->fetch()){
				$img_name=$row["img_name"];
				$img_url=$row["img_url"];
				$html=$html.<<<EOF
	<div class="mdui-grid-tile">
		<a data-fancybox="by_img" data-caption="$img_name" target="_blank" href="$img_url"><img lay-src="$img_url"></a>
		<div class="mdui-grid-tile-actions">
		<div class="mdui-grid-tile-text">
			<div class="mdui-grid-tile-title">$img_name</div>
		</div>
		</div>
	</div>
<br>
EOF;
			}
		echo $html;
?>
		</ul>
<?php
$sql=<<<EOF
SELECT * FROM imgs
EOF;
		$stmt=$conn->query($sql);
		$stmt_all=$stmt->fetchALL();
		$colcount=count($stmt_all);
		$total_pages=ceil($colcount / $num_rec_per_page);
		$urlold="?page=".($page-1);
		$urlnew="?page=".($page+1);
		if ($page!=1 && $page!=$total_pages){
			$html=<<<EOF
<ul class="pager">
		<li class="previous"><a href="$urlold">&larr; 上一页</a></li>
		<li class="next"><a href="$urlnew">下一页 &rarr;</a></li>
</ul>
EOF;
		}elseif ($page==1){
			$html=<<<EOF
		<ul class="pager">
			<li class="previous disabled"><a href="#">&larr; 上一页</a></li>
			<li class="next"><a href="$urlnew">下一页 &rarr;</a></li>
		</ul>
EOF;
		}else{
			$html=<<<EOF
		<ul class="pager">
			<li class="previous"><a href="$urlold">&larr; 上一页</a></li>
			<li class="next disabled"><a href="#">下一页 &rarr;</a></li>
		</ul>
EOF;
		}
		echo $html;
	}
		?>
	</div>
</div>
</body>
<?php require "../pcz/footer.php"; ?>
</html>
