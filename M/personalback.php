<div class="head">
			<div class="head1">			
			<form method="post" action="ask.php">
				<a id="zhi" href="personal.php" > 知乎</a>	
				<input class="text" type="text" name="question" placeholder='请在提问之前先搜索问题(暂时不可用)' />
				<input class="text1" type="submit" name="submit" value="添加问题" />
				<a href="personal.php"> <input class="text2"    type="button" value="主页"  /> </a>
				<a href='hobby.php'>    <input class="text2"    type="button" value="领域"  /> </a>
				<a href='notice.php'>   <input class="text2"     type="button" value="通知" /> </a>
		<div class="information">
				<a href="setting.php"><img src="a.png" alt="点击设置个人资料"/></a>	
				<div class='menu'>
					<?php	
						session_start();
						$username=$_SESSION['username'];
						echo "$username";
					?>
						<a href="personal.php">主页</a>
            <a href="letter.php">私信</a>
            <a href="setting.php">设置</a>
            <a href="login.php">退出</a>
				</div>
		</div>					
			</form>
		</div>				 
		</div>