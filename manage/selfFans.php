<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理我的粉丝</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">		
		<script src="../js/jquery-1.9.1.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link href="../css/manageSelf.css" rel="stylesheet" type="text/css">
		<script src="../js/manage.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<header id="manageHeader">
				<?php include(__DIR__."/../View/manageHeader.php"); ?>
			</header>
			<!--下面是页面主体部分-->
			<div class="row-fluid queryDiv">
				<div class="span12 mainContent">
					<div class="selfManageMenu">	
						<form class="form-search input-append pull-left">
							<input class="input-medium" type="text" placeholder="粉丝名称" /> 
							<button type="submit" class="btn">查找</button>
						</form>						
					</div>
					<div class="selfTableDiv">
						<table class="table selfTable">		
							<thead>
								<tr>
									<th>粉丝名称</th>
									<th>人物详情</th>
								</tr>							
							</thead>
							<tbody>
								<tr>
									<td>
										山外山
									</td>
									<td>
										<button class="btn-link detailsBtn">人物详情</button>
									</td>
								</tr>							
							</tbody>
						</table>
						<div class="pagination">
							<ul>
								<li>
									<a href="#">上一页</a>
								</li>
								<li>
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#">5</a>
								</li>
								<li>
									<a href="#">下一页</a>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
				
			</div>			
			
			
			<footer id="manageFooter">
				<?php include(__DIR__."/../View/manageFooter.php"); ?>
			</footer>	
				
		</div>		
	</body>
</html>
