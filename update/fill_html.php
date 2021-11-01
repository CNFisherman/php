<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>填空题编辑</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box{width:400px;margin:15px auto;padding:20px;border:1px solid #ccc;background-color:#fff;}
.box h1{font-size:20px;text-align:center;}
.profile-table{margin:0 auto;}
.profile-table th{font-weight:normal;text-align:right;}
.profile-table input[type="text"]{width:180px;border:1px solid #ccc;height:22px;padding-left:4px;}
.profile-table .button{background-color:#0099ff;border:1px solid #0099ff;color:#fff;width:80px;height:25px;margin:0 5px;cursor:pointer;}
.profile-table .td-btn{text-align:center;padding-top:10px;}
.profile-table th,.profile-table td{padding-bottom:10px;}
.profile-table td{font-size:14px;}
.profile-table .txttop{vertical-align:top;}
.profile-table select{border:1px solid #ccc;min-width:80px;height:25px;}
.profile-table .description{font-size:13px;width:250px;height:60px;border:1px solid #ccc;}
</style>
</head>
<body>
<div class="box">
	<h1>修改试题信息</h1>
	<form method="post">
	<table class="profile-table">
		<tr><th>内容：</th><td><input type="text" name="fill_info" value="<?php echo $fill_info['fill_info']; ?>"/></td></tr>
		<tr><th>答案：</th><td><input type="text" name="fill_answ" value="<?php echo $fill_info['fill_answ']; ?>"/></td></tr>
		<tr><th>难度：</th><td><input type="text" name="fill_level" value="<?php echo $fill_info['fill_level']; ?>"/></td></tr>
		<tr><th>章节：</th><td><input type="text" name="fill_chapter" value="<?php echo $fill_info['fill_chapter']; ?>"/></td></tr>
		<tr><th>分值：</th><td><input type="text" name="fill_score" value="<?php echo $fill_info['fill_score']; ?>"/></td></tr>
		<tr><td colspan="2" class="td-btn">
		<input type="submit" value="保存" class="button" />
		<input type="reset" value="重新填写" class="button" />
		</td></tr>
	</table>
	</form>
</div>
</body>
</html>