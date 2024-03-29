<!DOCTYPE html>
<html>
	<head>
		<meta charset="GBK" />
		<title>The Register page</title>
		<style>
			body{background-color:#0d7bd5}
			.logo{width:130px;height:100px;background-image:url(logo.png);
				  	position:absolute;top:10%;left:40%;background-color:#0d7bd5
				}
			.title{width:400px;height:40px}
			.main{
					width:380px;height:580px;background-color:white;
					position:absolute;top:22%;left:35%;
					border:2px solid;
					border-color:gray;
					border-radius: 12px;
    			border-radius: 12px;
					}
			.head{width:380px;height:40px;margin:0 0;background-color:#0d7bd5;
				border-bottom:2px solid;border-color:gray;
				border-top-left-radius: 9px;
    		border-top-right-radius: 9px;
				color:white;
				}
			.text{width:320px;height:30px;margin-left:30px;border-radius: 3px;}
			.text2{width:320px;height:60px;margin-left:30px;
				border-radius: 3px;}
			.button1{width:95px;height:40px;background-color:#0d7bd5;
						float:right;margin-right:30px;
						border-radius: 12px;
    				border-radius: 12px;
    				font-family:"隶书";font-size:20px;  
    				cursor:pointer;  
						box-shadow:3px 2px 2px #000000 ;}
			.regist{
					position:absolute;top:30px;right:60px;
					}
			a:link{text-decoration:none;}
			#h3{position:absolute;left:30px;}
			#label{margin-left:30px}
		</style>
	</head>
	<body>
		<div class="regist">
				<a href="login.php" class="register"><input class="button1" type="button" value="返回登陆"/></a>  
		</div>
		<div class="logo"></div>
		<div class="main">
			<div class="head">
				<h3 id="h3">我要注册 </h3>
			</div>
		<form method="post" action="apply.php">
			<p>
				<label id="label">用户名<br/></label>
				<input class="text" id="text1" name="name" placeholder="请输入英文字母或数字组成的用户名（6-11位）" type="text" value="" />
			</p>
			<p>
				<label for="email" id="label" >邮箱<br/></label>
				<input class="text" id="text1" name="email" placeholder="请使用常用邮箱，注册后不能修改" type="text" value="" />
			</p>
			<p>
				<label id="label" >密码<br/></label>
				<input class="text" type="password" id="password" name="password" placeholder="请设置密码（6-12位数字）" />
			</p>
			<p>
				<label id="label" >确认密码<br/></label>
				<input class="text" type="password" id="password" name="password1" placeholder="确认密码" />
			</p>
			<p>
				<label for="fullname" id="label">真实姓名<br/></label>
				<input class="text" id="text1" name="fullname" placeholder="请输入真实姓名" type="text" value="" />
			</p>
			<p>
				<label for="intro" id="label">自我介绍<br/></label>
				<textarea class="text2" id="text2" name="intro" placeholder="你的职业、公司或专业特长"></textarea>
			</p>
			<input class="button1" type="submit" name="register" value="我要注册" />
		</form>
		</div>
	</body>
</html>