<html>
	<head>
		<title>用户所回答的主页</title>
		<style type="text/css">			
			.center{width:800px;background-color:#ffffff;
				float:left-top;margin-left:200px;}
			.answerText	{width:40%;height:400px;background-color:#ffffff;
								float:left;margin-left:24%;margin-top:0px;}
			#answerText{width:100%;height:200px;border:2px solid; border-radius:12px;}
			#huida{width:90px;height:40px;border-radius:5px;background-color:#0d7bd5;
						float:right;margin-top:30px;margin-right:60px;
						cursor:pointer;border:1px solid; box-shadow:5px 5px 5px #000000 ; }
		</style>
		
	</head>
	<body>
				
		<?php
		require 'head.php';
		require 'right.php';
		?>
				
		<div class='center'>
			<?php
			$id1=$_GET['p'];
			//echo "$id1";
			
			$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
			mysql_select_db('zhihu'); //选择数据库
			//按照ID倒序查询数据库
			$sql="select * from question where id='$id1'";
			$result=mysql_query($sql,$link);
			//显示问题
			$row=mysql_fetch_array($result);
			$id=$row['id'];
			$author=$row['author'];
			$a=$row['title'];
			$b=$row['content'];
			$time=$row['time'];
			
			//session_start();
			$_SESSION['qid']=$id;
			
			echo "<h3> 问题</h1>";	
			echo "<h1 style='margin-top:0px;float:top;'> $a</h1>";
			echo "领域：$a<p>";
			echo "提问者：$author<p>";
			echo "提问时间：$time<p>";
			echo "&nbsp&nbsp&nbsp&nbsp$b<hr>";
			
			//显示回答  第一个的处理
			//根据回答表查找到回答者的id(answerAuthorId)
			$sql="select * from answer where qid='$id1'";
			$result1=mysql_query($sql,$link);			
			$answerRow=mysql_fetch_array($result1);			
			$answerAuthorId=$answerRow['uid'];
			$answerContent=$answerRow['content'];
			$time=$answerRow['time'];
			
			//根据回答者的id(answerAuthorId)在用户表中找到
			$sql="select * from user where id='$answerAuthorId' ";
			$result2=mysql_query($sql,$link);			
			$answerAuthorRow=mysql_fetch_array($result2);			
			$answerAuthor=$answerAuthorRow['username'];
			
			if($answerRow)
			{
				echo "<h3>回答</h3><hr/>";
				echo "回答者：$answerAuthor<br/>";
				echo "时间：$time<p>";
				echo "&nbsp&nbsp&nbsp&nbsp$answerContent<hr/>";
			}
			
			//对所有的回答输出
			while($answerRow)
			{
				$answerRow=mysql_fetch_array($result1);			
				$answerAuthorId=$answerRow['uid'];
				$answerContent=$answerRow['content'];
				$time=$answerRow['time'];
			
				//根据回答者的id(answerAuthorId)在用户表中找到
				$sql="select * from user where id='$answerAuthorId' ";
				$result2=mysql_query($sql,$link);			
				$answerAuthorRow=mysql_fetch_array($result2);			
				$answerAuthor=$answerAuthorRow['username'];
				if($answerRow)
				{
					//echo "<h3>回答</h3>";
					echo "回答者：$answerAuthor<p>";
					echo "时间：$time<p>";
					echo "&nbsp&nbsp&nbsp&nbsp$answerContent<hr/>";
				}
				
			}
			?>
		
		</div>
		
		<div class="answerText">
			<h3>添加答案</h3>
			<form action="saveAnswer.php" method="post">
				<textarea type="text" name="answer" id="answerText" placeholder="回答问题"/></textarea>
				<input id="huida" type="submit" name="ans" value="添加答案"/>
			</form>
			
		</div>
		
		
		
		
	</body>
</html>