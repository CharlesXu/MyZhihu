<html>
		<?php			
			$mail=$_POST['email'];
			$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
			mysql_select_db('zhihu'); //ѡ�����ݿ�
	
			$sql="select * from user where mail = '$_POST[email]'";
			$result=mysql_query($sql,$link);
			$row=mysql_num_rows($result);
			//echo "$row";
	
			if($row <= 0)
			{
			?>
				<script type='text/javascript'>
					alert('���û���û��ע�ᣡ��ע��');
					window.location.href="login.php";
				</script>
			<?php 
			}
			else
			{
				//��ʱ��Ϊ�޸�Ϊ6��1�������Ϊ�����뷢�͵�������
				$sql="update user set password='111111' where mail ='$mail'";
				mysql_query($sql,$link);
				?>
				<script>
					alert('�����Ѿ��޸�Ϊ��ʼ���루111111��');
					window.location.href="login.php";
				</script>
				<?php
			}			
		?>
</html>