<?php
require "pcz/connect.php";
session_start();
$user_name=$_SESSION["user_name"];
$sql=<<<EOF
SELECT user_name,user_sname FROM users WHERE user_name="$user_name" OR user_sname="$user_name";
EOF;
$stmt=$conn->query($sql);
foreach ($stmt as $row) {
    $user_name=$row['user_name'];
    $user_sname=$row['user_sname'];
}
?>
<!DOCTYPE html>
<html>
<?php require "pcz/header.php"; ?>
<?php if($_SESSION["login_user"]==true){require "pcz/body-drawer.php";} ?>
<div class="mdui-container">
	<div class="mdui-row">
	<?php require "pcz/body-show.php"; ?>
	</div>
</div>
</body>
<?php require "pcz/footer.php"; ?>
</html>
