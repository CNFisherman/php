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
   
   //获取要编辑的试题的id
   $cal_id = isset($_GET['cal_id']) ? intval($_GET['cal_id']) : 0;
   // 准备SQL语句  DELETE FROM Employee WHERE ID='$id'
   $sql = "delete from cal where cal_id = $cal_id";
    
    $result = $pdo->query($sql);
   
    $rows = array();
    
    while($row = $result->fetch()){
        $rows[] = $row;
    }
}catch(PDOException $e){
    echo $e->getMessage().'<br>';
}
define ('APP','dl');
require "../select/cal_html.php";

