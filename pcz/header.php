<head>
	<meta charset="utf-8" />
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://cdn.staticfile.org/mdui/0.4.3/css/mdui.min.css" />
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://cdn.staticfile.org/layui/2.5.6/css/layui.min.css" media="all" />
	<title>601毕业照</title>
</head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink mdui-loaded">
	<header class="mdui-appbar mdui-appbar-fixed">
		<div class="mdui-toolbar mdui-color-theme">
			<?php
			session_start();
			if($_SESSION["login_user"]==true){
				$nav_html=<<<EOF
	<a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></a>
	<a href="/" class="mdui-typo-headline mdui-hidden-xs">601毕业照</a>
	<div class="mdui-toolbar-spacer"></div>
	<div class="mdui-col-xs-3">
		<div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
				<button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>
			<form action="/pcz/imgshow_api.php" method="get" class="layui-form" name="search">
				<input class="mdui-textfield-input" type="text" placeholder="Search"/>
			</form>
				<button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
		</div>
	</div>
	<a class="mdui-btn mdui-btn-icon" href="/img" mdui-tooltip="{content: '图片展示'}"><i class="mdui-icon 
	material-icons">&#xe3f4;</i></a><!-- img -->
	<a class="mdui-btn mdui-btn-icon" href="/accouts/contain.php" mdui-tooltip="{content: '用户中心'}"><i 
	class="mdui-icon material-icons">&#xe853;</i></a><!-- user -->
EOF;
				echo $nav_html;
		} else {
			$nav_html=<<<EOF
	<a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer'}"><i class="mdui-icon material-icons">menu</i></a>
	<a href="/" class="mdui-typo-headline mdui-hidden-xs">601毕业照</a>
	<div class="mdui-toolbar-spacer"></div>
	<a id="reg" href="javascript:;"><i class="mdui-icon material-icons">&#xe145;</i>注册</a>
	<a id="login" href="javascript:;"><i 
	class="mdui-icon material-icons">&#xe853;</i>登录</a>
EOF;
				echo $nav_html;
	}
?>
		</div>
	</header>
