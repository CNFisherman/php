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
    
    //获取要编辑的员工的id
    $choice_id = isset($_GET['choice_id']) ? intval($_GET['choice_id']) : 0;
    
    //判断是否有POST数据提交
    if(!empty($_POST)){
    
        //定义变量$update，用来保存处理后的试题数据
        $update = array();
    
        //定义合法字段数组
        $fields = array('choice_info','choice_op1','choice_op2','choice_op3','choice_op4','choice_answ','choice_level','choice_chapter','choice_score');
    
        //遍历$_POST，获取更新试题数据的键和值
        foreach($fields as $v){
    
            $data = isset($_POST[$v]) ? $_POST[$v] : '';
    
            if($data=='') die($v.'字段不能为空');
    
            //把键和值按照sql更新语句中的语法要求连接，并存入到$update数组中
            $update[] = "`$v`='$data'";
        }
    
        //把$update数组元素使用逗号连接，赋值给$update_str
        $update_str = implode(',', $update);
    
        //组合sql语句
        $sql = "update `choice` set $update_str where  `choice_id`=$choice_id";
    
        if($res = $pdo->query($sql)){
            header("Location: ../select/choiceshow.php");
            die;
        }else{
            die('信息修改失败');
        }
    }else{
        //当没有表单提交时，查询当前要编辑的员工信息，展示到页面中
        $pdo = new PDO($dsn,$user,$pwd);
        
        //编写SQL语句，查询相应ID的试题数据
        $sql = "select * from choice where `choice_id`=$choice_id";
    
        $result = $pdo->query($sql);
            
        $rows = array();
        
        while($row = $result->fetch()){
            $rows[] = $row;
        }
    }
}catch(PDOEXception $e){
    echo $e->getMessage().'<br>';
    echo $e->getLine().'<br>';
    echo $e->__toString().'<br>';
}

//显示员工修改页面
define('APP', 'dl');
require './choice_html.php';

?>