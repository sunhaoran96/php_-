<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新旧分类</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet">
    <link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet">
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
        .weui_tab_bd .content img{
            width:100%;
            display:block;
        }
    </style>
</head>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">
        <!--导航栏开始-->
        <div class="weui_tab">
            <div class="weui_navbar">
                <a class="weui_navbar_item weui_bar_item_on">
                    商品分类
                </a>
                <a class="weui_navbar_item">
                    找一找
                </a>
            </div>
            <div class="weui_tab_bd">
                <!--第一个选项卡-->
                <div class="content">
                    <div style="height: 20px">
                        <a class="weui_cell" href="index.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/c1.jpg" alt="icon" style="width:15px;height:15px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_ft">
                                新旧分类
                            </div>
                        </a>
                    </div>
                    <div class="weui_cells weui_cells_access">
                        <a class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a5.jpg" alt="icon" style="width:80px;height:60px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>分类1：四六级考试</p>
                            </div>
                            <div class="weui_cell_ft">
                            </div>
                        </a>
                        <a class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a2.jpg" alt="icon" style="width:80px;height:60px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>分类2：考研必备</p>
                            </div>
                            <div class="weui_cell_ft">
                            </div>
                        </a>
                        <a class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a6.jpg" alt="icon" style="width:80px;height:60px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>分类3：杂志周刊</p>
                            </div>
                            <div class="weui_cell_ft">
                            </div>
                        </a>
                        <a class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a4.jpg" alt="icon" style="width:80px;height:60px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>分类4：小说地带</p>
                            </div>
                            <div class="weui_cell_ft">
                            </div>
                        </a>
                        <a class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a9.jpeg" alt="icon" style="width:80px;height:60px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>分类5：其他商品</p>
                            </div>
                            <div class="weui_cell_ft">
                            </div>
                        </a>
                    </div>

                </div>
                <!--第一个选项卡-->
                <!--第二个选项卡-->
                <div class="content" style="display: none">
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
                </div>
                <!--第二个选项卡-->

            </div>
        </div>
        <!--导航栏结束-->
    </div>

    <div class="weui_tabbar" height="100">

        <a href="index.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f5.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">全部商品</p>
        </a>
        <a href="xjfl.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f8.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">分类精选</p>
        </a>
        <a href="list.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f7.jpg" alt="" >
            </div>
            <p class="weui_tabbar_label">我的订单</p>
        </a>
        <a href="list_fengcai.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f6.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">购物车</p>
        </a>
    </div>
    </div>
</div>
</body>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/wechat(g)/Public/bookstore/js/swiper.js' charset='utf-8'></script>
<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
    $(".weui_navbar .weui_navbar_item").click(function () {
        $(".weui_navbar .weui_navbar_item").removeClass(
                "weui_bar_item_on"
        );//谁都没有weui_bar_item_on
        $(this).addClass("weui_bar_item_on");//点谁谁有
        //判断点击的是第几个选项卡
        var which=$(this).index();

        //让所有的内容区域隐藏
        $(".weui_tab_bd .content").hide();

        //按索引显示对应的内容
        $(".weui_tab_bd .content:eq("+which+")").show();
        console.log(which);


    })
</script>
</html>