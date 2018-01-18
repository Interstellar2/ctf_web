<?php
$conn = @mysql_connect("localhost","root","root");
if (!$conn){
	die("连接数据库失败：" . mysql_error());
}
echo'连接成功<br />';
$sql="create table guest_tbl(".
	"id int unsigned not null auto_increment primary key,".
  "nickname char(16) NOT NULL, ".
  "email char(60) NOT NULL,".
  "createtime int(10));";
mysqli_select_db($conn,'guest_tbl');
$retval = mysqli_query($conn,$sql);
if(!$retval)
{
	die('数据表创建失败:'. mysqli_error($conn));
}
echo"数据表创建成功\n";
mysql_select_db("test", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
mysql_close($conn);
?>