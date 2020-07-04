function ajax_reg(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	} else {
	// IE6, IE5 浏览器执行代码
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			ajax_load("TRUE");
			status_bool=JSON.parse(xmlhttp.responseText)["status_bool"];
			ajax_load("FALSE");
			reg_return(status_bool);
		}
	}
	xmlhttp.open("POST","/pcz/ac/reg.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	if(call_fs!=""){
		xmlhttp.send("user_name="+user_name+"&user_sname="+user_sname+"&pass_word="+pass_word+"&call_fs="+call_fs);
	} else {
		xmlhttp.send("user_name="+user_name+"&user_sname="+user_sname+"&pass_word="+pass_word);
	}
}
function ajax_log(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	} else {
	// IE6, IE5 浏览器执行代码
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			ajax_load("TRUE");
			status_bool=JSON.parse(xmlhttp.responseText)["status_bool"];
			ajax_load("FALSE");
			log_return(status_bool);
		}
	}
	xmlhttp.open("POST","/pcz/ac/login.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("user_name="+user_name+"&pass_word="+pass_word);
}
function fresh_html(){
if (window != top){
	top.location.href = location.href;
}
}
function ajax_repw(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	} else {
	// IE6, IE5 浏览器执行代码
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			ajax_load("TRUE");
			status_bool=JSON.parse(xmlhttp.responseText)["status_bool"];
			ajax_load("FALSE");
			repw_return(status_bool);
		}
	}
	xmlhttp.open("POST","/pcz/ac/re_pw.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("user_name="+user_name+"&repw="+pass_word);
}
function reg_return(status_bool){
	layui.use("layer", function(){
		var layer=layui.layer;
		if(status_bool=="TRUE"){
			layer.msg('注册成功');
			parent.window.location.reload();
		} else {
			layer.msg('恁已经注册过🌶');
		}
	});
}
function repw_return(status_bool){
	layui.use("layer", function(){
		var layer=layui.layer;
		if(status_bool=="TRUE"){
			layer.msg('修改成功');
			parent.window.location.reload();
		} else {
			layer.msg('修改失败');
		}
	});
}
function log_return(status_bool){
	layui.use("layer", function(){
		var layer=layui.layer;
		if(status_bool=="TRUE"){
			layer.msg('登录成功');
			parent.window.location.reload();
		} else {
			layer.msg('密码或账号错误🌶');
		}
	});
}
function ajax_load(status){
	if(status=="TRUE"){
		layui.use("layer", function(){
			var layer=layui.layer;
			index = layer.load(0, {shade: false});
		});
	} else {
		layer.close(index);
	}
}
function tc(){
	window.location.href="/pcz/ac/tc.php";
}