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
 
   $design_info=$_POST['info'];
   $design_answ=$_POST['answ'];
   $design_pic=$_POST['pic'];
   $design_score=$_POST['score'];
   $design_level=$_POST['level'];
   $design_chapter=$_POST['chapter'];
 
   $sql = "insert into design(design_info,design_answ,design_pic,design_score,design_level,design_chapter)values('$design_info','$design_answ','$design_pic','$design_score','$design_level','$design_chapter')";
 
mysqli_select_db( $conn, 'dl' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>