<?php
//�����ֽ�ע����Ϣ�浽���ݿ�
//require "config.php";
if(isset($_POST['register']))
{
	//require "config.php";
	//echo "$_POST[name]";// ����
	
	$username=$_POST['name'];
	$email=$_POST['name'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];
	$name=$_POST['fullname'];
	$hobby=$_POST['intro'];
	
	if(!$username|| !$email|| !$password|| !$password1|| !$name|| !$hobby)  //��Ϣ��д������
	{
		?>
		<script type="text/javascript">
			alert('��Ϣ��д����������������д��');
			window.location.href="register.php";			
		</script>
		<?php
		exit;
	}
	
	if($password!=$password1)
	{
		?>
		<script type="text/javascript">
			alert('�������벻��ͬ����������д��');
			window.location.href="register.php";			
		</script>
		<?php
		exit;
	}
	//������֤��û��
	if(!get_magic_quotes_gpc()){
		$username = addslashes($username);
		$email= addslashes($email);
		$password=addslashes($password);
		$name=addslashes($name);
		$hobby=addslashes($hobby);
		}
		
	/*@ $db=new mysqli('localhost','root','','zhihu','user');
	if(mysqli_connect_errno())
	{
		echo "�������ݿ�ʧ�ܣ�47";
	}
	
		
	$query="selet * from user where username='$username'";
	$result=$db -> query($query);
	*/
	
	$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
	mysql_select_db('zhihu'); //ѡ�����ݿ�	
	
	//��֤�û����Ƿ�ע��
	$un="SELECT * FROM user WHERE username = '$_POST[name]'";
	$result=mysql_query($un,$link);
	$row=mysql_num_rows($result);
	//echo "$row";
		if($row > 0)
		{
			?>
			<script type='text/javascript'>
				alert('�û����ظ��������ظ�ע�ᣡ');
				window.location.href="register.php";
				
			</script>
			<?php
			exit;
		}
		
		//��֤�����Ƿ�ע��
		$ma="SELECT * FROM user WHERE mail= '$_POST[email]'";			
		$result=mysql_query($ma,$link);
		$row=mysql_num_rows($result);	
		if($row > 0)
		{
			?>
				<script type='text/javascript'>
					alert('�����ѱ�ע�ᣡ');
					window.location.href="register.php";					
				</script>
	  	<?php
	  	exit;
		}
		
	else
	{
		$sql="insert into user( username,mail,password,name,hobby) values ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[fullname]','$_POST[intro]')";
		mysql_query($sql,$link);//ִ�в������
		//echo "<h1>��ϲ�㣡ע��ɹ���</h1>";
		//echo "<h2>������ת����½ҳ��</h2>";
		//sleep(200);
		?>
		<script type="text/javascript">
			alert('��ϲ�㣡ע��ɹ������ϵ�½');
			//alert('');
			window.location.href="login.php";
		</script>
		<?php
	}	
}
?>