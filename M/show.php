<?php
	//echo "<h1>This is a test</h1>";
	
	$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
	mysql_select_db('zhihu'); //选择数据库
	$sql="select * from question";
	$result=mysql_query($sql,$link);
	
	//对第一个的处理 		
	$row=mysql_fetch_array($result);
		$id=$row['id'];
		$author=$row['author'];
		$a=$row['title'];
		$b=$row['content'];
		//echo "<h3>$id</h3>";		
		echo "领域：$a<br/>";
		echo "提问者：<a href='#' style='color:red'>$author</a>";
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
		echo "领域：$a<br/>";
		echo "提问者：<a href='#' style='color:red'>$author</a>";
		echo "&nbsp&nbsp<a href='#'><h2> $a</h2></a>";
		echo "&nbsp&nbsp&nbsp&nbsp$b</br><hr>";
	}
?>