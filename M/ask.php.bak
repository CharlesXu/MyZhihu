<html>
	<head>
		<title>Ask Page</title>
		<style type="text/css">
		.questionCenter{
					width:380px;height:440px;background-color:white;
					position:absolute;top:22%;left:35%;
					border:2px solid;
					border-color:gray;
					border-radius: 12px;
    			border-radius: 12px;
    			}
    .Askhead{width:380px;height:40px;margin:0 0;background-color:#0d7bd5;
				border-bottom:2px solid;border-color:gray;
				border-top-left-radius: 9px;
    		border-top-right-radius: 9px;
				color:white;
				}
		.asktext{width:320px;height:30px;margin-left:30px;border-radius: 3px;}
			.asktext2{width:320px;height:150px;margin-left:30px;border-radius: 3px;}
			.askbutton1{width:95px;height:40px;background-color:#0d7bd5;
						float:right;margin-right:30px;
						border-radius: 12px;
    				border-radius: 12px;
    				font-family:"隶书";font-size:20px;  
    				cursor:pointer;  
						}
			.askregist{
					position:absolute;top:30px;right:60px;
					}
			a:link{text-decoration:none;}
			#askh3{position:absolute;left:30px;}
			#asklabel{margin-left:30px}
		</style>
	</head>
	<body>
		
		<?php
		require 'head.php';
		?>
		<div class="questionCenter">
			<div class="Askhead">
				<h3 id="askh3">我要提问 </h3>
			</div>
		<form method="post" action="ask.php">
			<?
			/*
			<p>
				<label id="asklabel">用户名<br/></label>
				<input class="asktext" id="text1" name="author" placeholder="请输入注册时的用户名" type="text" value="" />
			</p>
			
			<p>
				<label for="email" id="asklabel" >邮箱<br/></label>
				<input class="asktext" id="text1" name="email" placeholder="请使用常用邮箱，注册后不能修改" type="text" value="" />
			</p>*/
			?>
			<p>
				<label id="asklabel" >问题类别<br/></label>
				<input class="asktext"name="class" placeholder="输入问题类别" />
			</p>
			
			<p>
				<label id="asklabel" >问题题目<br/></label>
				<input class="asktext" name="questionname" placeholder="请输入提问的题目" />
			</p>
			
			
			<p>
				<label for="intro" id="asklabel">问题描述<br/></label>
				<textarea class="asktext2" id="text2" name="content" placeholder="详细描述你的问题"></textarea>
			</p>
			
			<input class="askbutton1" type="submit" name="ask" value="我要提问" />
		</form>
		</div>
		<?php
		if(isset($_POST['ask']))
		{
			$title=$_POST['questionname'];
			$mail=$_SESSION['mail'];
			$uid=$_SESSION['uid'];
			$author=$_SESSION['username'];
			$class=$_POST['class'];
			$content=$_POST['content'];
			$time=date("Y-m-d H:i:s");
			
		if( empty($title) ||empty($mail) || empty($author) ||empty($class) ||empty($content) )
		{
			?>
				<script type="text/javascript">
					alert('信息填写不完整，请填写完整！');
					window.location.href="ask.php";			
				</script>
			<?php
			exit;
		}
			
			$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
			mysql_select_db('zhihu'); //选择数据库
			
			$sql="insert into question( title,uid,time,author,class,content) values ('$title' ,'$uid','$time', '$author' , '$class' , '$content') ";
			mysql_query($sql,$link);//执行插入操作
			?>
				<script type="text/javascript">
					alert('提问成功，马上返回主页！');
					window.location.href="personal.php";			
				</script>
			<?php
			
		}			
		?>		
	</body>
</html>