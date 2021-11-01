<?php
	$conn=mysqli_connect("localhost","renyouye","123456");
	if(!$conn){
		echo "连接数据库失败！";
	}else{
		mysqli_query($conn,"dl");
    }
?>