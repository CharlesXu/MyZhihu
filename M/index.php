<?php
//登陆判断程序
//require "login.php";
if(isset($_POST['sub']))
{
	$mail=$_POST['email'];
	$password=$_POST['password'];		//*在数据库中查找email
	
	$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
	mysql_select_db('zhihu'); //选择数据库
	
	$sql="select * from user where mail = '$_POST[email]'";
	$result=mysql_query($sql,$link);
	$row=mysql_num_rows($result);
	//echo "$row";
	
	if($row <= 0)
	{
		?>
			<script type='text/javascript'>
				alert('该用户还没有注册！请注册');
				window.location.href="login.php";
			</script>
		<?php 
	}
	
	//邮箱与密码匹配	
	$sql="select * from user where mail ='$mail' and password = '$password'";
	$result=mysql_query($sql,$link);
	$row=mysql_num_rows($result);
	//echo "$row"; //测试
	if($row<=0)			//if(没有)
	{
		?>
			<script type='text/javascript'>
				alert('用户名和密码不匹配！');       //alert(用户名或者密码错误)；
				window.location.href="login.php";   //回到登陆界面	
			</script>
		<?php 
	}
	if($row==1)
	{
		session_start();
		$_SESSION['mail']=$_POST['email'];
		//在数据库中查找出用户名->session
		
		$sql="select * from user where mail ='$mail' and password = '$password'";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
		//echo "$row[username]";	
			
		$_SESSION['username']=$row['username'];
		$_SESSION['uid']=$row['id'];	
			
		//$a=$_SESSION['uid'];
		//echo "$a";		
			?>
			<script type='text/javascript'>    
				window.location.href="personal.php"; 
			</script>
		<?php 
		
	}
			
}
?>