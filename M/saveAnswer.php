<html>
	<head>
	</head>
	<head>
	<h1>saveAnswer.php</h1>
	<?php
	if(isset($_POST['ans']))
	{
		//echo "succeed";
		
		session_start();
		$qid=$_SESSION['qid'];
		$uid=$_SESSION['uid'];
		$content=$_POST['answer'];
		//echo "$content";
		if(!$content)  //信息填写不完整
		{
			?>
				<script type="text/javascript">
				alert('信息填写不完整，请重新填写！');
				window.location.href="answer.php";			
				</script>
			<?php
			exit;
		}
		$time=date("Y-m-d H:i:s");
		$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
		mysql_select_db('zhihu'); //选择数据库
			
		$sql="insert into answer( qid,uid,content) values ('$qid','$uid','$content') ";
		mysql_query($sql,$link);//执行插入操作
		?>
				<script type="text/javascript">
					alert('回答成功，马上返回主页！');
					window.location.href="personal.php";			
				</script>
			<?php
	}
	?>
	</head>
</html>