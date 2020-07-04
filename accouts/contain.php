<?php
require "../pcz/connect.php";
session_start();
$user_name=$_SESSION["user_name"];
$sql=<<<EOF
SELECT user_name,user_sname FROM users WHERE user_name="$user_name";
EOF;
$stmt=$conn->query($sql);
foreach ($stmt as $row) {
    $user_name=$row['user_name'];
    $user_sname=$row['user_sname'];
}
?>
<!DOCTYPE html>
<html>
<?php require "../pcz/header.php"; ?>
<?php 
if($_SESSION["login_user"]==true){
	$html_drawer=<<<EOF
<div class="mdui-drawer" id="left-drawer">
  <ul class="mdui-list">
	<li class="mdui-subheader">账号管理</li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe0da;</i>
      <div id="re_pw" class="mdui-list-item-content">修改密码</div>
    </li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe5cd;</i>
      <div onclick="tc()" class="mdui-list-item-content">退出</div>
    </li>
  </ul>
</div>
EOF;
echo $html_drawer;
}
?>
<div class="mdui-container">
	<div class="mdui-row">
<?php require "../pcz/body-show.php"; ?>
	</div>
</div>
</body>
<?php require "../pcz/footer.php"; ?>
</html>
