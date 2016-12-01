<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新旧书店</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet"/>
    <link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
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
        .weui_tab .weui_tab_bd .content img{
            width:100%;
            display: block;
        }
        .weui_article h1{
            font-size: 26px;
            color:#696969 ;
        }
    </style>
</head>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">
        <article class="weui_article">
                    <h1 style="color:gray">说走就走！一次奇幻冒险的旅行</h2>
                    <p>
                        陌生的地方总是令人充满好奇，好奇的地方总是令人产生向往，我们也因为心生向往而不断走向远方。
　　路上有美景，书中有故事，在美好的出游季节，跟着我们来一场说走就走的奇幻旅行，我们不确定会去到什么地方，也不知道旅途中会有多少的奇幻际遇、惊悚悬疑，抑或是幸运开启神秘宝藏。
　　请抓好扶手，系好安全带，充实而深度的奇幻冒险之旅即将展开！
                    </p>
                    <img src="/wechat(g)/Public/bookstore/images/6402.webp.jpg">
        </article>
    </div>
</div>

<!--tabar-->

</body>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/wechat(g)/Public/bookstore/js/swiper.js'></script>
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
        //按索引显示对应内容,选谁谁显示
        $(".weui_tab_bd .content:eq("+which+")").show();

    })

</script>
</html>