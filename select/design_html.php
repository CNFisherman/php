<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>试题信息列表</title>
  <style>
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{width:100%;margin-top:10px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;}
	.box table td{text-align:center;}
	.box a{color:#444;text-decoration:none;}
	.box a:hover{text-decoration:underline;}
	.search{padding:10px 0;float:right;font-size:12px;}
 </style>
 </head>
 <body>
	<form action="./designshow.php" method="post">
		<div class="box">
		<div class="title">设计题信息列表</div>
		<h1><a href="../update.html" style="text-align:center;">
        <input type="button"value="主界面"></a>
		<table border="1">
			<tr>
				<th width="5%">ID</th>
				<th>内容</th>
				<th>答案</th>
				<th>图片</th><th>难度</th><th>章节</th><th>分值</th>
				<th >相关操作</th>
			</tr>
			<?php if(!empty($rows)){ ?>
			<?php foreach($rows as $row){ ?>
			<tr>
				 <td><?php echo $row['design_id']; ?></td>
				 <td><?php echo $row['design_info']; ?></td>
				 <td><?php echo $row['design_answ']; ?></td>
				 <td><?php echo $row['design_pic']; ?></td>
				 <td><?php echo $row['design_level']; ?></td>
				 <td><?php echo $row['design_chapter']; ?></td>
				 <td><?php echo $row['design_score']; ?></td>
				 <td>
					<div align="center">
					<span>
							<a href="<?php echo '../update/designUpdate.php?design_id='.$row['design_id'] ?>">编辑</a>&nbsp; &nbsp;
							<a href="<?php echo '../delete/design.php?design_id='.$row['design_id'] ?>">删除</a>
						</span>
					</div>
				</td>
			</tr>
			<?php } ?>
			<?php }else{ ?>
			<tr><td colspan="6">查询的结果不存在！</td></tr>
			<?php } ?>
		</table>
	</form>
		<div class="search"><a href="/add/design.html">添加题目</a></div>
 </body>
</html>
