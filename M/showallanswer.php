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
						echo "<a href='#'><b>�鿴��ϸ����</b></a>";
						?>
					</div>
				</div>
				<div class="setBottom">
					<a href="#" id="bianji"><b>�༭�ҵĸ�������</b></a>
				</div>
			</div>
			
			<!--չʾ���û��������ʵ����⡣-->
					
					<?php
						$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
						mysql_select_db('zhihu'); //ѡ�����ݿ�
						//����ID�����ѯ���ݿ�
						$sql="select * from question where author ='$name' ";
						$result=mysql_query($sql,$link);
						$QuRow=mysql_fetch_array($result);						
						$title=$QuRow['title'];
						$id=$QuRow['id'];
						$uid=$QuRow['uid'];
						
						//����ʵ�ֵ��һ����Ŀ���ӽ�����Ŀ����
						$num=1;
						//echo "&nbsp<p><a href='showask.php?p=$id'><b> $num:$title</b></a><br/><p>";
						
						while($QuRow)
						{
							$QuRow=mysql_fetch_array($result);						
							$num++;							
							$title=$QuRow['title'];
							$id=$QuRow['id'];
							if($title)
							{
								//echo "&nbsp&nbsp<a href='showask.php?p=$id'><b> $num:$title</b></br><p>";	
							}													
						}					
						
					?>
			
			<!--չʾ���û������лش��������-->
			<div class="setTable1">
				<div class="setTop">
					<?php
						//$name=$_GET['name'];
						echo "<a href='#' id='tiwen'><b>$name �Ļش�</b>";
					?>
				</div>
				<div class="setInfo1">
					<?php
						$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
						mysql_select_db('zhihu'); //ѡ�����ݿ�
						
						//��answer���и����û���uidѡ������û��ش���������qid
						$sql1="select * from answer where uid ='$uid' ";
						$result1=mysql_query($sql1,$link);
						$AnRow=mysql_fetch_array($result1);	
						$qid=$AnRow['qid'];
						//echo "$qid";
						//����ʵ�ֵ��һ����Ŀ���ӽ�����Ŀ����
						//����qid���������ѡ����û��ش��������
						$sql2="select * from question where id ='$qid' ";
						$result2=mysql_query($sql2,$link);
						//echo "$result2"	;
						$AnQuRow=mysql_fetch_array($result2);							
						$AnQuTitle=$AnQuRow['title'];
						$num1=1;
						echo "<p><a href='showanswer.php?a=$qid'><b> $num1 :$AnQuTitle</b></a><br/><p>";
						
						
						//�����еĻش���е�uid�͸��û���ͬ�Ļش��qid��ѡ����	
						while($AnRow)	
						{
							$AnRow=mysql_fetch_array($result1);	
							$qid=$AnRow['qid'];
							//echo "$qid";
							//����ʵ�ֵ��һ����Ŀ���ӽ�����Ŀ����
							//����qid���������ѡ����û��ش��������
							$sql2="select * from question where id ='$qid' ";
							$result2=mysql_query($sql2,$link);
							//echo "$result2"	;
							$AnQuRow=mysql_fetch_array($result2);							
							$AnQuTitle=$AnQuRow['title'];
							if($AnQuTitle)
							{
								$num1++;							
								echo "&nbsp<a href='showanswer.php?a=$qid'><b> $num1 :$AnQuTitle</b></a><br/><p>";
							}
						}			
						
					?>
				</div>
			</div>
		</div>
		<div class="setRight">			
			<?php
			echo "<a href='setting.php?name=$name'><h3>������ҳ</h3></a>";
			echo "<a href='showallask.php?name=$name'>��������</a><p>";
			echo "<a href='showallanswer.php?name=$name'>���лش�</a><hr/>";
			?>
		</div>

	</div>
	
	</head>
</html>