<?php
	//echo "<h1>This is a test</h1>";
	
	$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
	mysql_select_db('zhihu'); //ѡ�����ݿ�
	$sql="select * from question";
	$result=mysql_query($sql,$link);
	
	//�Ե�һ���Ĵ��� 		
	$row=mysql_fetch_array($result);
		$id=$row['id'];
		$author=$row['author'];
		$a=$row['title'];
		$b=$row['content'];
		//echo "<h3>$id</h3>";		
		echo "����$a<br/>";
		echo "�����ߣ�<a href='#' style='color:red'>$author</a>";
		echo "&nbsp&nbsp <a href='answer.php'><h2> $a</h2></a>";
		echo "&nbsp&nbsp&nbsp&nbsp$b</br><hr>";
	
	while($row)
	{
		$row=mysql_fetch_array($result);
		$id=$row['id'];
		$author=$row['author'];
		$a=$row['title'];
		$b=$row['content'];
		//echo "<h3>$id</h3>";
		echo "����$a<br/>";
		echo "�����ߣ�<a href='#' style='color:red'>$author</a>";
		echo "&nbsp&nbsp<a href='#'><h2> $a</h2></a>";
		echo "&nbsp&nbsp&nbsp&nbsp$b</br><hr>";
	}
?>