<?php
$id=$_GET['id'];
$name=$_GET['name'];
//echo "$id";
$link=mysql_connect('localhost','root','','zhihu')or die("�������ݿ�ʧ��".mysql_error());//�������ݿ�
mysql_select_db('zhihu'); //ѡ�����ݿ�
//����idɾ�����ݿ��е�����
$sql="delete from question where id='$id'";
if(mysql_query($sql,$link))
{
	echo "<h1>ɾ���ɹ�,����󷵻أ�</h1>";		
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2 ; URL=setting.php?name=$name '>";		
}
?>
