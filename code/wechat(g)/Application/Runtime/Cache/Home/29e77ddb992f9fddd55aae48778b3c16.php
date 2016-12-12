<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>新旧书店</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet">
	<link href="/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet">
	<style>
		html,body{
			height:100%;
		}
		.swiper-container {
			width: 100%;
		}

		.swiper-container img {
			display: block;
			width: 100%;
		}

	</style>
</head>
<body>
<div class="weui_tab">
	<div class="weui_tab_bd">
		<!--顶部幻灯片开始-->
		<div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><a href="buy.html"><img src="/Public/bookstore/images/a3.jpg" alt="" ></a></div>
				<div class="swiper-slide"><a href="buy.html"><img src="/Public/bookstore/images/b1.jpg" alt=""></a></div>
				<div class="swiper-slide"><a href="buy.html"><img src="/Public/bookstore/images/a9.jpeg" alt=""></a></div>
				<div class="swiper-slide"><a href="buy.html"><img src="/Public/bookstore/images/b2.jpg" alt=""></a></div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
		</div>
		<!--顶部幻灯片结束-->
		<!--soso开始-->
		<div class="weui_search_bar" id="search_bar">
			<form class="weui_search_outer">
				<div class="weui_search_inner">
					<i class="weui_icon_search"></i>
					<input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required/>
					<a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
				</div>
				<label for="search_input" class="weui_search_text" id="search_text">
					<i class="weui_icon_search"></i>
					<span>搜索</span>
				</label>
			</form>
			<a href="javascript:" class="weui_search_cancel" id="search_cancel">取消</a>
		</div>
		<!--soso结束-->
		<!--shangpin开始-->
		<div class="weui-row">
			<div class="weui-col-50"><a href="buy.html"><img src="/Public/bookstore/images/a4.jpg" width="140" height="110"></a></div>
			<div class="weui-col-50"><a href="buy.html"><img src="/Public/bookstore/images/a7.jpg" width="140" height="110"></a></div>
		</div>
		<div class="weui-row">
			<div class="weui-col-50"><a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default">￥19.9</a></div>
			<div class="weui-col-50"><a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default">￥19.9</a></div>
		</div>
		<div class="weui-row">
			<div class="weui-col-50"><a href="buy.html"><img src="/Public/bookstore/images/a2.jpg" width="140" height="110"></a></div>
			<div class="weui-col-50"><a href="buy.html"><img src="/Public/bookstore/images/a8.jpg" width="140" height="110"></a></div>
		</div>
		<div class="weui-row">
			<div class="weui-col-50"><a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default">￥19.9</a></div>
			<div class="weui-col-50"><a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default">￥19.9</a></div>
		</div>
		<!--shangpin结束-->

	</div>

	<div class="weui_tabbar" height="100">
		<a href="index.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/Public/bookstore/images/f5.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">全部商品</p>
		</a>
		<a href="xjfl.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/Public/bookstore/images/f8.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">分类精选</p>
		</a>
		<a href="list.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/Public/bookstore/images/f7.jpg" alt="" >
			</div>
			<p class="weui_tabbar_label">我的订单</p>
		</a>
		<a href="cart.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/Public/bookstore/images/f6.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">购物车</p>
		</a>
	</div>
</div>
</body>
<script type="text/javascript" src="/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/Public/bookstore/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/Public/bookstore/js/swiper.js' charset='utf-8'></script>
<script>
	$(".swiper-container").swiper({
		loop: true,
		autoplay: 3000
	});

</script>
</html>