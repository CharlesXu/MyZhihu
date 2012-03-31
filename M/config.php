<html>
	<head>
		<title>Create data base</title>
	</head>
	<body>
		<?
		$db_host='localhost';
		$db_user='root';		
		$db_pass="";
		$db_name='zhihu';		
		//$table_user='b_user';
		//$table_question='qu_tiojn';
		//$table_answer='an_wer';
		
		$link=mysql_connect($db_host,$db_user,$db_pass,$db_name)or die("连接数据库失败(in config.php)".mysql_error());
		mysql_select_db('zhihu');
		
		//echo "Su~";
		
		$sql="CREATE table user(id int(5) not null auto_increment primary key,username varchar(11) not null,mail varchar(30) not null,password varchar(12) not null,name varchar(20) not null,hobby varchar(30) not null)";
		mysql_query($sql,$link);
		
		$sql="create table question(id int(10) not null auto_increment primary key,title varchar(30) not null,uid int(5),time datetime not null,author varchar(11),class varchar(20) not null,content text)";
		mysql_query($sql,$link);
		
		$sql="create table answer(id int(5) not null auto_increment primary key,qid int(5) not null,uid int(5) not null,time datetime not null,vote int(5), content longtext)";
		mysql_query($sql,$link);
		
		//echo "succeed";
		//echo "succeed"; // 测试数据库连接情况
		?>
	</body>
</html>