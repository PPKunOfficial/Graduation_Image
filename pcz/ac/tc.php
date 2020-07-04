<?php
session_start();
$_SESSION["login_user"]=false;
$_SESSION["user_name"]=false;
?>
<script>
window.location.href="/";
</script>