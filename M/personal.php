<html>
	<head>
		<title>Personal Page</title>
		<style type="text/css">
			.head{width:100%;height:54px;background-color:#0d7bd5;position:absolute;
				top:0;left:0;right:0;border-bottom:1px solid;	}	
			.head1{width:1000px;height:54px;margin:0 auto  }
			.text{
						color:#999;line-height:34px;background:none repeat scroll 0 0
						#EEF8FF;border:0 none;font-size:14px;outline:medium
						none;overflow:hidden;width:270px;
						border-radius:3px;
						}
			.text1{width:80px;height:36px;border-radius:5px;
				margin-left:0px;cursor:pointer;
				font-family:"����";font-size:15px;
				background-color:#0d7bd5;
			}
			.text2{width:80px;height:36px;border-radius:5px;
				margin-left:0px;cursor:pointer;
				font-family:"����";font-size:25px;
				color:white;
				background-color:#0d7bd5;
				border:none;}
			.link{width:80px;height:38px;}		
			
			.menu{font-weight:bold;
			         color:white;
			         border:0px solid #0d7bd5;
			         text-align:center;
			         width:190px;
			         height:30px;
			         background-color:#0d7bd5;float:right;
			         margin:20px 10px 0 0;
			        }
			.menu:hover a
			            {display:block}
			.menu a{display:none;
			           border-top:2px solid #0d7bd5;
			           background-color:white;
			           width:190px;
			           height:30px;
			           text-decoration:none;
			           color:Black}
			.menu a:hover {background-color:#dfeeff }
			.right{
					width:250px;height:1000px;background-color:lightgray;
					margin-right:350px ;margin-top:47px;	float:right;			
				}
			.center{width:800px;height:1000px; background-color:lightgray;
				float:left;margin-left:200px;margin-top:47px;}
			
			#zhi{font-family:"����";font-size:40px;}			
			a:link{text-decoration:none;}	
			#right1{font-size:20px;margin-left:10px; }		
		</style>
		
	</head>
	<body>
		<div class="head">
			<div class="head1">			
			<form method="post" action="ask.php">
				<a id="zhi" href="personal.php" > ֪��</a>	
				<input class="text" type="text" name="question" placeholder='��������֮ǰ����������(��ʱ������)' />
				<input class="text1" type="submit" name="submit" value="�������" />
				<a href="personal.php"> <input class="text2"    type="button" value="��ҳ"  /> </a>
				<a href='hobby.php'>    <input class="text2"    type="button" value="����"  /> </a>
				<a href='notice.php'>   <input class="text2"     type="button" value="֪ͨ" /> </a>	
				<div class='menu'>
					<?php	
						session_start();
						$mail=$_SESSION['mail'];
						echo "$mail";
					?>
						<a href="personal.php">��ҳ</a>
            <a href="letter.php">˽��</a>
            <a href="setting.php">����</a>
            <a href="login.php">�˳�</a>
				</div>			
			</form>
		</div>				 
		</div>
		<div class='center'>
			<h3>���¶�̬</h3><hr/>
			
			
		</div>
		<div class="right">
			<a id="right1" href="personal.php">�ҵĲݸ�</a>
			<p>
			<a id="right1" href="personal.php">�ҵ��ղ�</a>
			<p>
			<a id="right1" href="personal.php">��������</a>
			<p>
			<a id="right1" href="personal.php">�ҹ�ע������</a>
			<p>
			<a id="right1" href="personal.php">��ش��ҵ�����</a>
			<hr/>
			<a id="right1" href="hobby.php">֪������</a>
		</div>
		
		
	</body>
</html>