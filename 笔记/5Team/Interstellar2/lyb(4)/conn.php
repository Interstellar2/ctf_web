<?php
$conn = @mysql_connect("localhost","root","root");
if (!$conn){
	die("�������ݿ�ʧ�ܣ�" . mysql_error());
}
echo'���ӳɹ�<br />';
$sql="create table guest_tbl(".
	"id int unsigned not null auto_increment primary key,".
  "nickname char(16) NOT NULL, ".
  "email char(60) NOT NULL,".
  "createtime int(10));";
mysqli_select_db($conn,'guest_tbl');
$retval = mysqli_query($conn,$sql);
if(!$retval)
{
	die('���ݱ���ʧ��:'. mysqli_error($conn));
}
echo"���ݱ����ɹ�\n";
mysql_select_db("test", $conn);
//�ַ�ת��������
mysql_query("set character set 'gbk'");
//д��
mysql_query("set names 'gbk'");
mysql_close($conn);
?>