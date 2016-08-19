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
	<title>免费优惠券</title>
</head>
<body>
	<!--搜索框-->
	<div class="search_bar" id="search_bar">
        <form class="search_outer">
            <div class="search_inner">
                <i class="icon_search"></i>
                <input type="search" class="search_input" id="search_input" placeholder="搜索" required="">
                <a href="javascript:" class="icon_clear" id="search_clear"></a>
            </div>
        </form>
    </div>
    <div class="freeC_tab">
    	<!-- tabs -->
		<div class="btn-group">
	      <button type="button" class="btn btn-default">所有楼层</button>
	      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <span class="caret"></span>
	        <span class="sr-only">Toggle Dropdown</span>
	      </button>
	      <ul class="dropdown-menu">
	        <li><a href="#">Action</a></li>
	        <li><a href="#">Another action</a></li>
	        <li><a href="#">Something else here</a></li>
	        <li role="separator" class="divider"></li>
	        <li><a href="#">Separated link</a></li>
	      </ul>
	    </div>
	    <div class="btn-group">
	      <button type="button" class="btn btn-default">所有类型</button>
	      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <span class="caret"></span>
	        <span class="sr-only">Toggle Dropdown</span>
	      </button>
	      <ul class="dropdown-menu">
	        <li><a href="#">Action</a></li>
	        <li><a href="#">Another action</a></li>
	        <li><a href="#">Something else here</a></li>
	        <li role="separator" class="divider"></li>
	        <li><a href="#">Separated link</a></li>
	      </ul>
	    </div>
    </div>
	<div class="freeC_panel_access">
        <div class="freeC_panel_bd">
            <a href="javascript:void(0);" class="">
                <div class="freeC_media_hd">
                    <img class="" alt="" src="">
                </div>
                <div class="freeC_media_bd">
                    <h4 class="freeC_media_title" id="store_name">D&C</h4>
                    <p class="freeC_media_desc" >店铺号：<span id="store_id">B301</span></p>
                    <p class="freeC_media_desc" >所属业态：<span id="store_belong">乐购</span></p>
                </div>
                <p id="store_coupon" class="store_coupon">会员优惠：会员当月尊享9折</p>
            </a>
        </div>
    </div>
    <div class="freeC_panel_access">
        <div class="freeC_panel_bd">
            <a href="javascript:void(0);" class="">
                <div class="freeC_media_hd">
                    <img class="" alt="" src="">
                </div>
                <div class="freeC_media_bd">
                    <h4 class="freeC_media_title" id="store_name">D&C</h4>
                    <p class="freeC_media_desc" >店铺号：<span id="store_id">B301</span></p>
                    <p class="freeC_media_desc" >所属业态：<span id="store_belong">乐购</span></p>
                </div>
                <p id="store_coupon" class="store_coupon">会员优惠：会员当月尊享9折</p>
            </a>
        </div>
    </div> 
</body>
</html>