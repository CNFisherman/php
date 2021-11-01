<?php
$con=mysqli_connect("127.0.0.1","renyouye","123456","dl"); //连接数据库，且定位到数据库dl
if(!$con){die("error:".mysqli_connect_error());} //如果连接失败就报错并且中断程序
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user==null||$pass==null){
    echo "<script>alert('非管理员！')</script>";
    die("账号和密码不能为空!");
}
function check_param($value=null) {  //过滤注入所用的字符，防止sql注入
    $str = '~select|insert|and|or|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile~';//preg函数前面的这段记得用分隔符
    if(preg_match($str,$value)){
        exit('参数非法！');
    }
    return true;
}
if(check_param($user)==true&&check_param($pass)==true){
    $sql = "SELECT username,password FROM usertext WHERE username = '$user' AND password = '$pass'";
    $resultSet = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($resultSet);
    if(mysqli_num_rows($resultSet)>0){ 
         header('location:homepage.html'); 
    }else{ 
         echo "用户名和密码输入错误！登录失败！"; 
    }

}
?>







