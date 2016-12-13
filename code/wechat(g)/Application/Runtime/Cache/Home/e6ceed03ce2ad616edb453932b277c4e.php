<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>分类详情</title>
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
        .weui_tab_bd .content img{
            width:100%;
            display:block;
        }
    </style>
</head>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">
        <div class="content">
            <div style="height: 20px">
                <a class="weui_cell" href="xjfl.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/c1.jpg" alt="icon" style="width:15px;height:15px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_ft">
                        分类详情
                    </div>
                </a>
            </div>

            <div class="weui_cells weui_cells_access">

                <a class="weui_cell" href="tsxq.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/a5.jpg" alt="icon" style="width:80px;height:40px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>四六级复习资料</p>
                    </div>
                    <div class="weui_cell_ft">
                    </div>
                </a>
                <a class="weui_cell" href="tsxq.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/a2.jpg" alt="icon" style="width:80px;height:40px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>四六级真题试卷</p>
                    </div>
                    <div class="weui_cell_ft">
                    </div>
                </a>
                <a class="weui_cell" href="tsxq.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/a6.jpg" alt="icon" style="width:80px;height:40px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>四六级单词句子</p>
                    </div>
                    <div class="weui_cell_ft">
                    </div>
                </a>
                <a class="weui_cell" href="tsxq.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/a4.jpg" alt="icon" style="width:80px;height:40px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>四六级复习资料</p>
                    </div>
                    <div class="weui_cell_ft">
                    </div>
                </a>
                <a class="weui_cell" href="tsxq.html">
                    <div class="weui_cell_hd">
                        <img src="/Public/bookstore/images/a9.jpeg" alt="icon" style="width:80px;height:40px;margin-right:5px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>四六级复习资料</p>
                    </div>
                    <div class="weui_cell_ft">
                    </div>
                </a>
            </div>

        </div>
    </div>

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