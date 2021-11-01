<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'renyouye';            // mysql用户名
$dbpass = '123456';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('连接失败: ' );
}
mysqli_query($conn , "set names utf8");
 
   $fill_info=$_POST['info'];
   $fill_answ=$_POST['answ'];
   $fill_pic=$_POST['pic'];
   $fill_score=$_POST['score'];
   $fill_level=$_POST['level'];
   $fill_chapter=$_POST['chapter'];
 
   $sql = "insert into fill(fill_info,fill_answ,fill_pic,fill_score,fill_level,fill_chapter)values('$fill_info','$fill_answ','$fill_pic','$fill_score','$fill_level','$fill_chapter')";
 
mysqli_select_db( $conn, 'dl' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);