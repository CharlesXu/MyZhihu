<html>
	<head>
		<title>֪��-��ҳ</title>
		<style type="text/css">			
			.center{width:800px;background-color:#ffffff;
				float:left-top;margin-left:200px;}
			.answerText	{width:650px;height:400px;background-color:#ffffff;
								float:left;margin-left:200px;margin-top:0px;}
			#answerText{width:550px;height:200px;margin-left:50px;border:2px solid; border-radius:12px;}
			#huida{width:90px;height:40px;border-radius:5px;background-color:#0d7bd5;
						float:right;margin-top:30px;margin-right:60px;
						cursor:pointer;border:1px solid;  }
		</style>
		
	</head>
	<body>
				
		<?php
		require 'head.php';
		require 'right.php';
		?>
				
		<div class='center'>
			<?php
			$id1=$_GET['p']/3;
			//echo "$id";
			
			$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
			mysql_select_db('zhihu'); //ѡ�����ݿ�
			//����ID�����ѯ���ݿ�
			$sql="select * from question where id='$id1'";
			$result=mysql_query($sql,$link);
			//��ʾ����
			$row=mysql_fetch_array($result);
			$id=$row['id'];
			$author=$row['author'];
			$a=$row['title'];
			$b=$row['content'];
			
			//session_start();
			$_SESSION['qid']=$id;
				
			echo "<h1 style='margin-top:0px;float:top;'> $a</h1>";
			echo "����$a<p>";
			echo "�����ߣ�$author<p>";
			echo "&nbsp&nbsp&nbsp&nbsp$b<hr>";
			
			//��ʾ�ش�  ��һ���Ĵ���
			//���ݻش�����ҵ��ش��ߵ�id(answerAuthorId)
			$sql="select * from answer where  by   ID   desc and qid='$id1'";
			$result1=mysql_query($sql,$link);			
			$answerRow=mysql_fetch_array($result1);			
			$answerAuthorId=$answerRow['uid'];
			$answerContent=$answerRow['content'];
			$time=$answerRow['time'];
			
			//���ݻش��ߵ�id(answerAuthorId)���û������ҵ�
			$sql="select * from user where id='$answerAuthorId' ";
			$result2=mysql_query($sql,$link);			
			$answerAuthorRow=mysql_fetch_array($result2);			
			$answerAuthor=$answerAuthorRow['username'];
			
			echo "<h3>�ش�</h3>";
			echo "�ش��ߣ�$answerAuthor<p>";
			echo "ʱ�䣺$time<p>";
			echo "$answerContent<hr/>";
			//�����еĻش����
			while($answerRow)
			{
				$answerRow=mysql_fetch_array($result1);			
				$answerAuthorId=$answerRow['uid'];
				$answerContent=$answerRow['content'];
				$time=$answerRow['time'];
			
				//���ݻش��ߵ�id(answerAuthorId)���û������ҵ�
				$sql="select * from user where id='$answerAuthorId' ";
				$result2=mysql_query($sql,$link);			
				$answerAuthorRow=mysql_fetch_array($result2);			
				$answerAuthor=$answerAuthorRow['username'];
				if($answerRow)
				{
					echo "<h3>�ش�</h3>";
					echo "�ش��ߣ�$answerAuthor<p>";
					echo "ʱ�䣺$time<p>";
					echo "$answerContent<hr/>";
				}
				
			}
			?>
		
		</div>
		
		<div class="answerText">
			<h3>���Ӵ�</h3>
			<form action="saveAnswer.php" method="post">
				<textarea type="text" name="answer" id="answerText" placeholder="�ش�����"/></textarea>
				<input id="huida" type="submit" name="ans" value="���Ӵ�"/>
			</form>
			
		</div>
		
		
		
		
	</body>
</html>