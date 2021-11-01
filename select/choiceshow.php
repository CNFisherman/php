<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');

$dbms = 'mysql';

//数据库服务器主机名，端口号，选择的数据库
$host = 'localhost';
$port = '3306';
$dbname = 'dl';
//设置字符集
$charset = 'utf8';
//用户密码
$user = 'renyouye';
$pwd = '123456';
$dsn = "$dbms:host=$host;port=$port;dbname=$dbname;charset=$charset";

try{
    $pdo = new PDO($dsn,$user,$pwd);
    //准备SQL语句
    $info=$_POST['info'];
    $sql = "select * from choice where choice_info like '%$info%'";
    //执行query()函数
    $result = $pdo->query($sql);

    $rows = array();
        //执行成功
        //遍历结果集
        while( $row = $result->fetch()) {
            $rows[] = $row;
        }
     
}catch(PDOException $e){
    echo $e->getMessage().'<br>';
}
define('APP', 'dl');
//加载视图页面，显示数据
require "./choice_html.php";
