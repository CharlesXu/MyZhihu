<div class="head">
			<div class="head1">			
			<form method="post" action="ask.php">
				<a id="zhi" href="personal.php" > ֪��</a>	
				<input class="text" type="text" name="question" placeholder='��������֮ǰ����������(��ʱ������)' />
				<input class="text1" type="submit" name="submit" value="�������" />
				<a href="personal.php"> <input class="text2"    type="button" value="��ҳ"  /> </a>
				<a href='hobby.php'>    <input class="text2"    type="button" value="����"  /> </a>
				<a href='notice.php'>   <input class="text2"     type="button" value="֪ͨ" /> </a>
		<div class="information">
				<a href="setting.php"><img src="a.png" alt="������ø�������"/></a>	
				<div class='menu'>
					<?php	
						session_start();
						$username=$_SESSION['username'];
						echo "$username";
					?>
						<a href="personal.php">��ҳ</a>
            <a href="letter.php">˽��</a>
            <a href="setting.php">����</a>
            <a href="login.php">�˳�</a>
				</div>
		</div>					
			</form>
		</div>				 
		</div>