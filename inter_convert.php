<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='initial-scale=1, maximum-scale=1'>
	<meta name='apple-mobile-web-app-capable' content='yes'>
	<meta name='apple-mobile-web-app-status-bar-style' content='black'>
	<link rel='stylesheet' href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/style.js" ></script>
	<title>兑换积分</title>
</head>
<body>
	<div class="convert_container">
		<div class="inter_c_header">
			<ul>
				<li>我的积分<span>36</span></li>
				<li>积分有限期至<span>2016-12-32</span></li>
			</ul>
			<label>兑换记录</label>
		</div>
		<div id="inter_c_con" class="inter_c_con">
			<div class="inter_c_card">
				<div class="inter_c_card_i">
					<div class="inter_c_card_i_pic">
						<img src="images/p73@2x.png">
					</div>
					<div class="inter_c_card_i_text">
						<p>Seesaw咖啡券</p>
					</div>
				</div>
				<div class="inter_c_card_i_ticket">
					<p>积分：<span>100</span></p>
					<button type="button" data-toggle="modal" data-target="#convertModal">兑换</button>
				</div>
			</div>
			<div class="inter_c_card">
				<div class="inter_c_card_i">
					<div class="inter_c_card_i_pic">
						<img src="images/p73@2x.png">
					</div>
					<div class="inter_c_card_i_text">
						<p>Seesaw咖啡券券Seesaw咖啡券Seesaw咖啡券</p>
					</div>
				</div>
				<div class="inter_c_card_i_ticket">
					<p>积分：<span>100</span></p>
					<button type="button" data-toggle="modal" data-target="#convertModal">兑换</button>
				</div>
			</div>
			<div class="inter_c_card">
				<div class="inter_c_card_i">
					<div class="inter_c_card_i_pic">
						<img src="images/p73@2x.png">
					</div>
					<div class="inter_c_card_i_text">
						<p>Seesaw咖啡券</p>
					</div>
				</div>
				<div class="inter_c_card_i_ticket">
					<p>积分：<span>100</span></p>
					<button type="button" data-toggle="modal" data-target="#convertModal">兑换</button>
				</div>
			</div>
			<div class="inter_c_card">
				<div class="inter_c_card_i">
					<div class="inter_c_card_i_pic">
						<img src="images/p73@2x.png">
					</div>
					<div class="inter_c_card_i_text">
						<p>Seesaw咖啡券Seesaw咖啡券Seesaw咖啡券</p>
					</div>
				</div>
				<div class="inter_c_card_i_ticket">
					<p>积分：<span>100</span></p>
					<button type="button" data-toggle="modal" data-target="#convertModal">兑换</button>
				</div>
			</div>
			<div class="inter_c_card">
				<div class="inter_c_card_i">
					<div class="inter_c_card_i_pic">
						<img src="images/p73@2x.png">
					</div>
					<div class="inter_c_card_i_text">
						<p>Seesaw咖啡券Seesaw咖啡券Seesaw咖啡券</p>
					</div>
				</div>
				<div class="inter_c_card_i_ticket">
					<p>积分：<span>100</span></p>
					<button type="button"  data-toggle="modal" data-target="#convertModal">兑换</button>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="convertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		      	<div class="invert_list_picture">
					<img src="images/p72@2x.png">
				</div>
		        <p class="product_title">Eco&More家庭护理套装</p>
				<p class="product_text">Eco&More家庭护理套装，品牌汇聚，多种配方，满足您的不同需要求，超值低价，实惠到家！</p>
				<p class="product_title">所需积分：<span>100</span></p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		        <button type="button" class="btn btn-primary" style="border:0;background-color: #15A929;">确认</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>