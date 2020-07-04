<?php
require "../pcz/connect.php";
session_start();
$user_name=$_SESSION["user_name"];
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://cdn.staticfile.org/mdui/0.4.3/css/mdui.min.css" />
	<link rel="stylesheet" href="https://cdn.staticfile.org/layui/2.5.6/css/layui.min.css" media="all">
</head>
<body>
<div class="mdui-container">
	<div class="mdui-row">
		<div class="mdui-col-md9">
			<form action="/pcz/ac/login.php" method="post" class="layui-form" name="reg">
				<div class="mdui-textfield mdui-textfield-floating-label">
					<label class="mdui-textfield-label">密码</label>
					<input type="password" lay-verify="pass|required" name="pass_word" id="pass_word" class="mdui-textfield-input" required/>
					<div class="mdui-textfield-error">密码输入有误</div>
				</div>
				<input class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme" lay-submit lay-filter="js-repw" type="submit" value="提交"/>
			</form>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/gh/blueimp/JavaScript-MD5@2.16.0/js/md5.min.js"></script>
<script src="/assets/accout.js"></script>
<script src="https://cdn.staticfile.org/mdui/0.4.3/js/mdui.min.js"></script>
<script src="https://cdn.staticfile.org/layui/2.5.6/layui.min.js"></script>
<script>
	layui.use("form",function(){
		var form=layui.form;
		form.on('submit(js-repw)', function(data){
			console.log(data.field)
            pass_word=md5(data.field["pass_word"]);
            user_name="<?php echo $user_name; ?>";
			ajax_repw();
			return false;
		});
		form.verify({
			pass: [/^[\S]{6,50}$/,'密码必须6到50位，且不能出现空格']
		});
	});
</script>
</html>
