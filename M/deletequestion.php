<?php
$id=$_GET['id'];
$name=$_GET['name'];
//echo "$id";
$link=mysql_connect('localhost','root','','zhihu')or die("连接数据库失败".mysql_error());//连接数据库
mysql_select_db('zhihu'); //选择数据库
//按照id删除数据库中的问题
$sql="delete from question where id='$id'";
if(mysql_query($sql,$link))
{
	echo "<h1>删除成功,两秒后返回！</h1>";		
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2 ; URL=setting.php?name=$name '>";		
}
?>
