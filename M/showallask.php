<html>
	<head>
		<title>Setting Page</title>
		<style type="text/css">
			.setMain{width:60%;position:absolute;
				left:20%;	top:60px;
				background-color:#ffffff;
					}
			.setLeft{
					width:65%;height:1000px;background-color:#ffffff;
					float:left;
					}
			.setRight{
						width:30%;height:1000px;background-color:#ffffff;						
						float:right;
						}
			.setTable{width:99%;height:160px;border:1px solid lightgray;border-radius:5px;
						margin-top:40px;background-color:#ffffff;}
			.setInfo{width:100%;height:120px;
						border-bottom:1px solid lightgray;}
			.setHeadImg{width:80px;height:80px;background-color:#ffffff;
						float:left;margin-left:20px;margin-top:20px;}
			.setInformation{width:75%;height:80px;float:right;background-color:#ffffff;
						margin-top:20px;margin-right:20px;}
			.setBottom{width:100%;height:39px;background-color:#ffffff;}
			
			.setTable1{width:99%;border:1px solid lightgray;border-radius:5px;
						margin-top:40px;background-color:#ffffff;}
			.setTop{width:100%;height:39px;background-color:#ffffff;
						border-bottom:2px solid lightgray;}
			.setInfo1{width:100%;}
			#img{width:80px;height:80px;}
			#bianji{float:right;margin-right:30px;margin-top:10px;}
			#tiwen{float:left;margin-top:8px;margin-left:10px;}
			#shanchu{float:right;margin-right:20px;}
		</style>
	</head>
	<head>
	<h1>setting.php</h1>
	<?php
	require 'head.php';
	?>
	<div class="setMain">
		<div class="setLeft"> 
			<div class="setTable">
				<div class="setInfo">
					<div class="setHeadImg">
						<a href="setting.php"><img  id="img" src="a.png"/></a>
					</div>
					<div class="setInformation">
						<?php
						$name=$_GET['name'];
						echo "<a href='#'><h3>$name</h3></a>";
						echo "<a href='#'><b>查看详细资料</b></a>";
						?>
					</div>
				</div>
				<div class="setBottom">
					<a href="#" id="bianji"><b>编辑我的个人资料</b></a>
				</div>
			</div>
			
			<!--展示该用户所有提问的问题。-->
			<div class="setTable1">
				<div class="setTop">
					<?php
						$name=$_GET['name'];
						echo "<a href='#' id='tiwen'><b>$name 的提问</b>";
					?>
				</div>
				<div class="setInfo1">
					<?php
						$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
						mysql_select_db('zhihu'); //选择数据库
						//按照ID倒序查询数据库
						$sql="select * from question where author ='$name' ";
						$result=mysql_query($sql,$link);
						$QuRow=mysql_fetch_array($result);						
						$title=$QuRow['title'];
						$id=$QuRow['id'];
						$uid=$QuRow['uid'];
						
						//将来实现点击一个题目链接进入题目界面
						$num=1;
						if($title)
						{
							echo "&nbsp<p><a href='showask.php?p=$id'><b> $num:$title</b></a>";
							echo "<a href='deletequestion.php?id=$id&name=$name' id='shanchu'>删除</a><p><hr/>";
						}
						else if(!$title)						
						{
							echo "<p><a href='#'>暂无提问</a>";
							echo "&nbsp&nbsp&nbsp&nbsp<a href='ask.php'>现在去提问？</a><p>";
							//echo "";
						}
						//echo "&nbsp<p><a href='showask.php?p=$id'><b> $num:$title</b></a><br/><p>";
						
						while($QuRow)
						{
							$QuRow=mysql_fetch_array($result);						
							$num++;							
							$title=$QuRow['title'];
							$id=$QuRow['id'];
							if($title)
							{
								echo "&nbsp&nbsp<a href='showask.php?p=$id'><b> $num:$title</b>";	
								echo "<a href='deletequestion.php?id=$id&name=$name' id='shanchu'>删除</a><p><hr/>";
							}													
						}					
						
					?>
				</div>
			</div>
			
		</div>
		<div class="setRight">			
			<?php
				echo "<a href='setting.php?name=$name'><h3>个人主页</h3></a>";
				echo "<a href='showallask.php?name=$name'>所有问题</a><p>";
				echo "<a href='showallanswer.php?name=$name'>所有回答</a><hr/>";
			?>
		</div>

	</div>
	
	</head>
</html>