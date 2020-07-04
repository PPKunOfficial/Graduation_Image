<script src="https://cdn.staticfile.org/mdui/0.4.3/js/mdui.min.js"></script>
<script src="https://cdn.staticfile.org/layui/2.5.6/layui.min.js"></script>
<script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.staticfile.org/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
$(".js_fancybox_show").fancybox();
layui.use('element', function(){
  var element = layui.element;
  
	element.on('nav(filter)', function(elem){
		console.log(elem);
	});
});
layui.use("layer",function(){
	var layer=layui.layer;
	$('#re_pw').on('click', function(){
		layer.open({
			type: 2,
			title: '修改密码',
			resize: false,
			maxmin: true,
			shadeClose: true,
			area : ['300px' , '300px'],
			content: '/accouts/re_pw.php'
		});
	});
	$('#login').on('click', function(){
		layer.open({
			type: 2,
			title: '登录',
			resize: false,
			maxmin: true,
			shadeClose: true,
			area : ['300px' , '300px'],
			content: '/accouts/login.html'
		});
	});
	$('#reg').on('click', function(){
		layer.open({
			type: 2,
			title: '注册',
			resize: false,
			maxmin: true,
			shadeClose: true,
			area : ['300px' , '500px'],
			content: '/accouts/reg.html'
		});
	});
});
layui.use('flow', function(){
  var flow = layui.flow;
  //当你执行这样一个方法时，即对页面中的全部带有lay-src的img元素开启了懒加载（当然你也可以指定相关img）
  flow.lazyimg(); 
});
</script>
<script src="/assets/accout.js"></script>
