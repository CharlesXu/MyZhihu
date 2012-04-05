<html>
		<?php			
			$mail=$_POST['email'];
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
			else
			{
				//暂时定为修改为6个1，后面改为将密码发送到邮箱里
				$sql="update user set password='111111' where mail ='$mail'";
				mysql_query($sql,$link);
				?>
				<script>
					alert('密码已经修改为初始密码（111111）');
					window.location.href="login.php";
				</script>
				<?php
			}			
		?>
</html>