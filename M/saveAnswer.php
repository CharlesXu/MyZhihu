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
		if(!$content)  //��Ϣ��д������
		{
			?>
				<script type="text/javascript">
				alert('��Ϣ��д����������������д��');
				window.location.href="answer.php";			
				</script>
			<?php
			exit;
		}
		$time=date("Y-m-d H:i:s");
		$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
		mysql_select_db('zhihu'); //ѡ�����ݿ�
			
		$sql="insert into answer( qid,uid,content) values ('$qid','$uid','$content') ";
		mysql_query($sql,$link);//ִ�в������
		?>
				<script type="text/javascript">
					alert('�ش�ɹ������Ϸ�����ҳ��');
					window.location.href="personal.php";			
				</script>
			<?php
	}
	?>
	</head>
</html>