<?php
//��½�жϳ���
//require "login.php";
if(isset($_POST['sub']))
{
	$mail=$_POST['email'];
	$password=$_POST['password'];		//*�����ݿ��в���email
	
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
	
	//����������ƥ��	
	$sql="select * from user where mail ='$mail' and password = '$password'";
	$result=mysql_query($sql,$link);
	$row=mysql_num_rows($result);
	//echo "$row"; //����
	if($row<=0)			//if(û��)
	{
		?>
			<script type='text/javascript'>
				alert('�û��������벻ƥ�䣡');       //alert(�û��������������)��
				window.location.href="login.php";   //�ص���½����	
			</script>
		<?php 
	}
	if($row==1)
	{
		session_start();
		$_SESSION['mail']=$_POST['email'];
		//�����ݿ��в��ҳ��û���->session
		
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