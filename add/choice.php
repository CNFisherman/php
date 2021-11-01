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
 
   $choice_info=$_POST['info'];
   $choice_op1=$_POST['A'];
   $choice_op2=$_POST['B'];
   $choice_op3=$_POST['C'];
   $choice_op4=$_POST['D'];
   $choice_answ=$_POST['answ'];
   $choice_pic=$_POST['pic'];
   $choice_score=$_POST['score'];
   $choice_level=$_POST['level'];
   $choice_chapter=$_POST['chapter'];
 
   $sql = "insert into choice(choice_info,choice_op1,choice_op2,choice_op3,choice_op4,choice_answ,choice_pic,choice_score,choice_level,choice_chapter)values('$choice_info','$choice_op1','$choice_op2','$choice_op3','$choice_op4','$choice_answ','$choice_pic','$choice_score','$choice_level','$choice_chapter')";
 
mysqli_select_db( $conn, 'dl' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>