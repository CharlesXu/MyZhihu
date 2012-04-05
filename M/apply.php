<?php
//本部分将注册信息存到数据库
//require "config.php";
if(isset($_POST['register']))
{
	//require "config.php";
	//echo "$_POST[name]";// 测试
	
	$username=$_POST['name'];
	$email=$_POST['name'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];
	$name=$_POST['fullname'];
	$hobby=$_POST['intro'];
	
	if(!$username|| !$email|| !$password|| !$password1|| !$name|| !$hobby)  //信息填写不完整
	{
		?>
		<script type="text/javascript">
			alert('信息填写不完整，请重新填写！');
			window.location.href="register.php";			
		</script>
		<?php
		exit;
	}
	
	if($password!=$password1)
	{
		?>
		<script type="text/javascript">
			alert('两次密码不相同，请重新填写！');
			window.location.href="register.php";			
		</script>
		<?php
		exit;
	}
	//邮箱验证还没做
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
		echo "连接数据库失败！47";
	}
	
		
	$query="selet * from user where username='$username'";
	$result=$db -> query($query);
	*/
	
	$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
	mysql_select_db('zhihu'); //选择数据库	
	
	//验证用户名是否注册
	$un="SELECT * FROM user WHERE username = '$_POST[name]'";
	$result=mysql_query($un,$link);
	$row=mysql_num_rows($result);
	//echo "$row";
		if($row > 0)
		{
			?>
			<script type='text/javascript'>
				alert('用户名重复！不能重复注册！');
				window.location.href="register.php";
				
			</script>
			<?php
			exit;
		}
		
		//验证邮箱是否注册
		$ma="SELECT * FROM user WHERE mail= '$_POST[email]'";			
		$result=mysql_query($ma,$link);
		$row=mysql_num_rows($result);	
		if($row > 0)
		{
			?>
				<script type='text/javascript'>
					alert('邮箱已被注册！');
					window.location.href="register.php";					
				</script>
	  	<?php
	  	exit;
		}
		
	else
	{
		$sql="insert into user( username,mail,password,name,hobby) values ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[fullname]','$_POST[intro]')";
		mysql_query($sql,$link);//执行插入操作
		//echo "<h1>恭喜你！注册成功！</h1>";
		//echo "<h2>马上跳转到登陆页面</h2>";
		//sleep(200);
		?>
		<script type="text/javascript">
			alert('恭喜你！注册成功！马上登陆');
			//alert('');
			window.location.href="login.php";
		</script>
		<?php
	}	
}
?>