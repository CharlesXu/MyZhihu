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
    				font-family:"����";font-size:20px;  
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
				<h3 id="askh3">��Ҫ���� </h3>
			</div>
		<form method="post" action="ask.php">
			<?
			/*
			<p>
				<label id="asklabel">�û���<br/></label>
				<input class="asktext" id="text1" name="author" placeholder="������ע��ʱ���û���" type="text" value="" />
			</p>
			
			<p>
				<label for="email" id="asklabel" >����<br/></label>
				<input class="asktext" id="text1" name="email" placeholder="��ʹ�ó������䣬ע������޸�" type="text" value="" />
			</p>*/
			?>
			<p>
				<label id="asklabel" >�������<br/></label>
				<input class="asktext"name="class" placeholder="�����������" />
			</p>
			
			<p>
				<label id="asklabel" >������Ŀ<br/></label>
				<input class="asktext" name="questionname" placeholder="���������ʵ���Ŀ" />
			</p>
			
			
			<p>
				<label for="intro" id="asklabel">��������<br/></label>
				<textarea class="asktext2" id="text2" name="content" placeholder="��ϸ�����������"></textarea>
			</p>
			
			<input class="askbutton1" type="submit" name="ask" value="��Ҫ����" />
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
					alert('��Ϣ��д������������д������');
					window.location.href="ask.php";			
				</script>
			<?php
			exit;
		}
			
			$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
			mysql_select_db('zhihu'); //ѡ�����ݿ�
			
			$sql="insert into question( title,uid,time,author,class,content) values ('$title' ,'$uid','$time', '$author' , '$class' , '$content') ";
			mysql_query($sql,$link);//ִ�в������
			?>
				<script type="text/javascript">
					alert('���ʳɹ������Ϸ�����ҳ��');
					window.location.href="personal.php";			
				</script>
			<?php
			
		}			
		?>		
	</body>
</html>