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
 
   $judge_info=$_POST['info'];
   $judge_answ=$_POST['answ'];
   $judge_pic=$_POST['pic'];
   $judge_score=$_POST['score'];
   $judge_level=$_POST['level'];
   $judge_chapter=$_POST['chapter'];
 
   $sql = "insert into judge(judge_info,judge_answ,judge_pic,judge_score,judge_level,judge_chapter)values('$judge_info','$judge_answ','$judge_pic','$judge_score','$judge_level','$judge_chapter')";
 
mysqli_select_db( $conn, 'dl' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>