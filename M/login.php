<html>
<head>
	<meta charset="GBK">
	<style type="text/css">		
		html{background:#0d7bd5 ;height:100%;}		
		.text{display:block;
					width:250px;padding:10px 5px;margin:20px 0 18px;
					font-size:14px;line-height:18px;background:#e8f4fc;
					border:1px solid #0d7bd5;color:#888;cursor:text;
					ime-mode:disabled;box-shadow:0 1px 0 rgba(255,255,255,.3),0 1px 3px rgba(0,0,0,.3) inset;
					background-clip:padding-box;border-radius:5px}
		.button{width:70px;height:40px;background-color:#0d7bd5;
						float:left;
						border:1px solid;
						border-color:blue;
						cursor:pointer;
						border-radius: 12px;
    				border-radius: 12px;
						}
		.button1{width:100px;height:30px;background-color:#0d7bd5;
						float:left;
						border-radius: 12px;
    				border-radius: 12px;
    				cursor:pointer
						}
		.logo {width:130px;height:99px;background-image:url(logo.png);
					}
		.regist{
					position:absolute;top:30px;right:60px;
					}
		.actions{float:left;margin-left:10px;display:block;*color:#b7d4ec}
		.footer{width:800px;height:20px;position:absolute;bottom:40px;left:40%;color:white;
			}
			#login{
					width:480px;height:390px;position:absolute;
					top:40%;left:55%;margin:-195px 0 0 -240px;
					color:red;
					}
				#login h1{margin:0 0 0 20px}
		a:link{text-decoration:none;}
				
	</style>

</head>
<body>
		<div class="regist">
				<a href="register.php" class="register"><input class="button1" type="button" value="����ע���˺�"/></a>  
		</div>
		<div id="login" style="float:left" >
			<a href="login.php"><h1>My zhihu</h1></a>
			<div class="logo">
			</div>
			<form class="login" action="index.php" method="POST" >				
				<input class="text" type="email" name="email" spellcheck="false" placeholder="�� �� �� �� �� ��" autofocus tabindex="1">
				<input class="text" type="password" name="password" placeholder="�� ��" tabindex="2">
				<input class="button" type="submit" name="sub" value="�� ½" tabindex="3"/>
				<div class="actions">
					<input id="remember_me" type="checkbox" name="rememberme" checked>
					<label>�� ס ��   </label>
					<a href="findPassword.php">�������룿</a>
				</div>
			</form>					
		</div>
		<div class="footer">
		My zhihu  Clonde By daidong HIT  
		<a href="http://localhost/wordpress/">  My HomePage</a>
		</div>
</body>
</html>