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
			.text2{width:320px;height:60px;margin-left:30px;border-radius: 3px;}
			.button1{width:95px;height:40px;background-color:#0d7bd5;
						float:right;margin-right:30px;
						border-radius: 12px;
    				border-radius: 12px;
    				font-family:"����";font-size:20px;  
    				cursor:pointer;  
						}
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
				<a href="login.php" class="register"><input class="button1" type="button" value="���ص�½"/></a>  
		</div>
		<div class="logo"></div>
		<div class="main">
			<div class="head">
				<h3 id="h3">��Ҫע�� </h3>
			</div>
		<form method="post" action="apply.php">
			<p>
				<label id="label">�û���<br/></label>
				<input class="text" id="text1" name="name" placeholder="������Ӣ����ĸ��������ɵ��û�����6-11λ��" type="text" value="" />
			</p>
			<p>
				<label for="email" id="label" >����<br/></label>
				<input class="text" id="text1" name="email" placeholder="��ʹ�ó������䣬ע������޸�" type="text" value="" />
			</p>
			<p>
				<label id="label" >����<br/></label>
				<input class="text" type="password" id="password" name="password" placeholder="���������루6-12λ���֣�" />
			</p>
			<p>
				<label id="label" >ȷ������<br/></label>
				<input class="text" type="password" id="password" name="password1" placeholder="ȷ������" />
			</p>
			<p>
				<label for="fullname" id="label">��ʵ����<br/></label>
				<input class="text" id="text1" name="fullname" placeholder="��������ʵ����" type="text" value="" />
			</p>
			<p>
				<label for="intro" id="label">���ҽ���<br/></label>
				<textarea class="text2" id="text2" name="intro" placeholder="���ְҵ����˾��רҵ�س�"></textarea>
			</p>
			<input class="button1" type="submit" name="register" value="��Ҫע��" />
		</form>
		</div>
	</body>
</html>