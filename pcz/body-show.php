		<?php
		if($_SESSION["login_user"]==true){
		$username=$_SESSION["user_name"];
		$html=<<<EOF
<h1>$username 你好!</h1>
<div class="mdui-panel" mdui-panel="{accordion: true}">
	<div class="mdui-panel-item">
		<h2 class="mdui-panel-item-header">前言</h2>
		<div class="mdui-panel-item-body">
			这是一个由PP开发的毕业照程序<br>如果有问题,请发邮件至:ppkunoffical#foxmail.com(#换成@)
		</div>
	</div>
	<div class="mdui-panel-item">
		<h2 class="mdui-panel-item-header">目的</h2>
		<div class="mdui-panel-item-body">
			刚开始只是开发给自己看看而已<br>
			没想到在无意之间我就立了个Flag(改进这个程序)<br>
			然后就有了现在这个产物<br>
			至于这里,先这样占个位吧
		</div>
	</div>
	<div class="mdui-panel-item">
		<h2 class="mdui-panel-item-header">打赏</h2>
		<div class="mdui-panel-item-body">
			PP写了这么久,真的不打算打赏一下吗?<br>
			<a data-fancybox="pay_img" data-caption="pay0" href="/assets/pay_img/alipay.jpg"><img lay-src="/assets/pay_img/alipay.jpg" width="200"></img></a>
			<a data-fancybox="pay_img" data-caption="pay1" href="/assets/pay_img/wechatpay.png"><img lay-src="/assets/pay_img/wechatpay.png" width="200"></img></a>
		</div>
	</div>
</div>
EOF;
		echo $html;
		}
		?>
